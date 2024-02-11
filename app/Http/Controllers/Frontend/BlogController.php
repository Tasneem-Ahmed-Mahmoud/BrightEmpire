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
    // dd($blog);
    $related_blogs=Blog::with(['image', 'seo'])->whereId('id', '!=',$blog->id)
    ->whereBlogCategoryId($blog->blog_category_id)->take(6)->get(['title','id']);
      return view('frontend.blogs.single-blog', compact("blog","related_blogs"));
  
  }

function blogs(){
  $blogs=Blog::with(['image', 'seo'])->latest()->paginate(1,['id','title','description']);
  $related_blogs = Blog::with(['image', 'seo'])
  ->whereNotIn('id', $blogs->pluck('id')->toArray())
  ->take(6)
  ->get(['title', 'id']);
  return view('frontend.blogs.blogs', compact("blogs","related_blogs"));
}

}
