<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Traits\DomTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    use DomTrait;
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $categories = category::paginate(10, ['id','name','description','title','content']);

        return view('dashboard.categories.index', compact('categories'));
    }
    function create()
    {
       
        return view('dashboard.categories.create');
    }


function store(categoryRequest $request){
    try {
    DB::transaction(function ($query)use ($request) {
    $category=Category::create([
            'name'=>$request->name,
            'description'=>$$this->uploadContentFiles($request->description),
            'title'=>$request->title,
             'content'=>$this->uploadContentFiles($request->content)
    ]);
    
    $category->seo()->create([
       'title'=>$request->seo_title,
       'description'=>$request->seo_description,
       'url'=>$request->url, 
    ]);

    });

} catch (\Exception $e) {
    Alert::error('error','Transaction failed: ' . $e->getMessage());
 }
 
    Alert::success('success','stored successfully');
    return to_route('categories.index');
    
}



function edit(Category $category)
{
  
    return view('dashboard.categories.edit',compact('category'));
}

function update(CategoryRequest $request,Category $category){

    try {
    DB::transaction(function ()use ($request,$category) {
    $category->update([
            'name'=>$request->name,
            'description'=>$this->uploadContentFiles($request->description),
            'title'=>$request->title,
            'content'=>$this->uploadContentFiles($request->content)
    ]);
    $category->seo()->update([
        'title'=>$request->seo_title,
        'description'=>$request->seo_description,
        'url'=>$request->url, 
     ]);
});
} catch (\Exception $e) {
   Alert::error('error','Transaction failed: ' . $e->getMessage());
}

Alert::success('success', 'updated successfully');

    return redirect()->back();
    
}

function destroy(Category $category){


    try {
        DB::transaction(function ()use ($category) {
        $category->delete();
        $category->seo()->delete();
        });
    } catch (\Exception $e) {
       Alert::error('error','Transaction failed: ' . $e->getMessage());
    }
    
    Alert::success('success', 'deleted successfully');
    
        return redirect()->back();
  
}

}