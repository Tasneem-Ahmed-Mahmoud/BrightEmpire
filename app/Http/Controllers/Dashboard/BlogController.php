<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $blogs = Blog::paginate(10, ['id', 'title', 'description', 'content']);

        return view('dashboard.blogs.index', compact('blogs'));
    }
    function create()
    {

        return view('dashboard.blogs.create');
    }


    function store(BlogRequest $request)
    {
        $content = $this->uploadContentFiles($request->content);
        // dd($content);
        try {
            DB::transaction(function ($query) use ($request, $content) {
                $blog = Blog::create([
                    "title" => $request->title,
                    "description" => $request->description,
                    "content" => $content
                ]);
                $blog->image()->create([
                    'name' => uploadImage($request->image, Blog::PATH),
                    'alt' => $request->alt
                ]);
                $blog->seo()->create([
                    'title' => $request->seo_title,
                    'description' => $request->seo_description,
                    'url' => $request->url,
                ]);
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'stored successfully');
        return to_route('blogs.index');
    }



    function edit(Blog $blog)
    {

        return view('dashboard.blogs.edit', compact('blog'));
    }

    function update(BlogRequest $request, Blog $blog)
    {
        $content = $this->uploadContentFiles($request->content);
        try {
            DB::transaction(function () use ($request, $blog, $content) {
                $blog->update([
                    "title" => $request->title,
                    "description" => $request->description,
                    "content" => $content
                ]);

                $blog->image()->update([
                    'name' => $request->hasFile('image') ? uploadImage($request->image, Blog::PATH, $blog->image->name) : $blog->image->name,
                    'alt' => $request->alt
                ]);
                $blog->seo()->update([
                    'title' => $request->seo_title,
                    'description' => $request->seo_description,
                    'url' => $request->url,
                ]);
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'updated successfully');

        return redirect()->back();
    }

    function destroy(Blog $blog)
    {


        try {
            DB::transaction(function () use ($blog) {
                $blog->delete();
                $blog->seo()->delete();
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'deleted successfully');

        return redirect()->back();
    }


    private function uploadContentFiles($content)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $files = $dom->getElementsByTagName('file'); // Assuming a custom tag for file uploads

        foreach ($files as $file) {
            $data = $file->getAttribute('src');
            // Assuming the file is base64 encoded
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            // Generate a unique filename with an image extension
            $file_extension = 'png'; // Change this to the desired image extension
            $file_name = "/upload/" . time() . '_' . rand(100, 999) . '.' . $file_extension;

            $path = public_path() . $file_name;

            // Check if the directory exists, if not, create it
            $directory = pathinfo($path, PATHINFO_DIRNAME);
            if (!File::isDirectory($directory)) {
                File::makeDirectory($directory, 0755, true, true);
            }

            file_put_contents($path, $data);
            $file->removeAttribute('src');
            $file->setAttribute('src', $file_name);
        }

        return $dom->saveHTML();
    }
}
