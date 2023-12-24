<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    

    
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $services = Service::with(['category:id,name'])->paginate(10, ['id', 'name', 'description','category_id','title']);

        return view('dashboard.services.index', compact('services'));
    }
    function create()
    {
        $categories = Category::get(['id', 'name']);
        return view('dashboard.services.create', compact('categories'));
    }


    function store(ServiceRequest $request)
    {

   
        try {
            DB::transaction(function ($query) use ($request) {
                $service = Service::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'title' => $request->title,
                ]);
                $service->image()->create([
                    'name' => uploadImage($request->image, Service::PATH),
                    'alt' => $request->alt
                ]);

                $service->seo()->create([
                    'title' => $request->seo_title,
                    'description' => $request->seo_description,
                    'url' => $request->url,
                ]);
            });
        } catch (\Exception $e) {
          
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success','stored successfully');
        return to_route('services.index');
    }



    function edit(Service $service)
    {
        $categories = Category::get(['id', 'name']);
        return view('dashboard.services.edit', compact('service', 'categories'));
    }

    function update(ServiceRequest $request, Service $service)
    {

        try {
            DB::transaction(function () use ($request, $service) {
                $old_image = $service->image->name;
                $service->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'title' => $request->title,

                ]);
                $service->image()->create([
                    'name' => $request->hasFile('image') ? uploadImage($request->image, Service::PATH, $old_image) : $old_image,
                    'alt' => $request->alt
                ]);
                $service->seo()->update([
                    'title' => $request->seo_title,
                    'description' => $request->seo_description,
                    'url' =>$request->url
                ]);
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'updated successfully');

        return redirect()->back();
    }

    function destroy(Service $service)
    {

        try {
            DB::transaction(function () use ($service) {
                deleteImage($service->image->name, Service::PATH);
                $service->image()->delete();
                $service->seo()->delete();
                $service->delete();
               
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }
        
        Alert::success('success', 'deleted successfully');

        return redirect()->back();
    }

}
