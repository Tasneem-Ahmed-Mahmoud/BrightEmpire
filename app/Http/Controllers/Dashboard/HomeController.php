<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Fleet;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    function index()
    {
        $categories = Category::count();
        $services=Service::count();
        $fleets=Fleet::count();
        $messages=Contact::count();
        return view('dashboard.index', compact('categories', 'services', 'fleets','messages'));
    }
}
