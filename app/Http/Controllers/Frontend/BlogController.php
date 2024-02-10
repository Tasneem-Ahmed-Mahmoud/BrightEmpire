<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function single_blog($url)
  {
    $blog = Blog::with(['image', 'seo'])->whereHas('seo', function ($query) use ($url) {
      $query->whereUrl($url);
    })->first();
      return view('frontend.blogs.single-blog', compact("blog"));
  
  }

function blogs(){
  $blogs=Blog::with(['image', 'seo'])->latest()->paginate(7,['id','title','description']);
  dd($blogs);
  return view('frontend.blogs.blogs', compact("blogs"));
}

}
