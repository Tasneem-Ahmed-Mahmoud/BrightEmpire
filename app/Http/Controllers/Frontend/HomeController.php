<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Fleet;
use App\Models\Review;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  //
  function index()
  {

    $fleets = Fleet::with('seo')->take(6)->get();
    $services = Service::with('image', 'seo')->take(6)->get();
    $reviews = Review::with(['image'])->take(6)->latest()->get( ['id', 'name', 'message']);
    return view('frontend.landing', compact('fleets', 'services','reviews'));
  }

  function service($url)
  {
    $service = Service::with(['image', 'seo'])->whereHas('seo', function ($query) use ($url) {
      $query->whereUrl($url);
    })->first();
    if ($service) {
      return view('frontend.services.service', compact("service"));
    } else {
      $category = Category::with(['image', 'seo'])->whereHas('seo', function ($query) use ($url) {
        $query->whereUrl($url);
      })->first();
      if ($category) {
        return view('frontend.services.category', compact("category"));
      }
    }
    abort(404);
  }

  function fleet($url){
    $fleet = Fleet::with(['images','features'])->whereHas('seo', function ($query) use ($url) {
      $query->whereUrl( $url);
    })->first();
    if ($fleet) {
      return view('frontend.fleets.fleet', compact("fleet"));
    }
    abort(404);
  }
}
