<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\BlogCategoryRequest;

class BlogCategoryController extends Controller
{


    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $categories = BlogCategory::paginate(10, ['id', 'name']);

        return view('dashboard.blog-categories.index', compact('categories'));
    }
    function create()
    {
        return view('dashboard.blog-categories.create');
    }


    function store(BlogCategoryRequest $request)
    {
        $category = BlogCategory::create(['name' => $request->name]);
        if ($category) {
            Alert::success('success', 'stored successfully');
        } else {
            Alert::error('error', 'failed ');
        }


        return to_route('blog-categories.index');
    }



    function edit(BlogCategory $category)
    {
        return view('dashboard.blog-categories.edit', compact('category'));
    }

    function update(BlogCategoryRequest $request, BlogCategory $category)
    {
        if ($category->update(['name' => $request->name])) {
            Alert::success('success', 'updated successfully');
        } else {
            Alert::error('error', 'failed');
        }
        return redirect()->back();
    }

    function destroy(BlogCategory $category)
    {
        if ($category->delete()) {
            Alert::success('success', 'deleted successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    }
}
