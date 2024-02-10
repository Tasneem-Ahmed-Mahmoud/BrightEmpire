<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Traits\DomTrait;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    use DomTrait;
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $blogs = Blog::paginate(10, ['id', 'title', 'description', 'content']);

        return view('dashboard.blogs.index', compact('blogs'));
    }
    function create()
    {
        $blog_categories = BlogCategory::get(['id', 'name']);
        return view('dashboard.blogs.create', compact("blog_categories"));
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
                    "content" => $content,
                    'blog_category_id' => $request->blog_category_id
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
        $blog_categories = BlogCategory::get(['id', 'name']);
        return view('dashboard.blogs.edit', compact('blog','blog_categories'));
    }

    function update(BlogRequest $request, Blog $blog)
    {
        $content = $this->uploadContentFiles($request->content);
        try {
            DB::transaction(function () use ($request, $blog, $content) {
                $blog->update([
                    "title" => $request->title,
                    "description" => $request->description,
                    "content" => $content,
                    'blog_category_id' => $request->blog_category_id
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
}
