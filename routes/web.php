<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SystemController;
use App\Http\Controllers\Frontend\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

include_once __DIR__ . '/dashboard.php';

Route::get('/', [HomeController::class, 'index'])->name('landing');

// ################# start redirect routs#########################################################################

// #################limo services###########################
Route::get('services/nyc-limo-services', function () {
    return redirect()->route('service','night-in-town')->withStatus(302);
});
Route::get('services/limousine-services-nyc', function () {
    return redirect()->route('service','travelling-with-kids')->withStatus(302);
});
Route::get('limousine-company', function () {
    return redirect()->route('service','special-occasion')->withStatus(302);
});
Route::get('services/professional-drivers', function () {
    return redirect()->route('service','luxury-limo-service')->withStatus(302);
});

Route::get('services/nyc-limo', function () {
    return redirect()->route('service','wedding')->withStatus(302);
});
Route::get('services/limo-service-new-york', function () {
    return redirect()->route('service','vip-transportation')->withStatus(302);
});

Route::get('empire-limo-nyc', function () {
    return redirect()->route('service','prom')->withStatus(302);
});
// ##########Airport Car Service#########################
Route::get('car-service-to-JFK', function () {
    return redirect()->route('service','car-service-to-jfk')->withStatus(302);
});
Route::get('car-service-to-LGA', function () {
    return redirect()->route('service','car-service-to-lga')->withStatus(302);
});
Route::get('car-service-to-EWR', function () {
    return redirect()->route('service','car-service-to-ewr')->withStatus(302);
});
Route::get('car-service-to-TEB', function () {
    return redirect()->route('service','car-service-to-teb')->withStatus(302);
});
Route::get('car-service-to-HPN', function () {
    return redirect()->route('service','car-service-to-hpn')->withStatus(302);
});
// ##########Point To Point Transfer#########################
Route::get('limo-service-between-NYC-and-Brooklyn', function () {
    return redirect()->route('service','limo-service-between-nyc-and-brooklyn')->withStatus(302);
});
Route::get('limo-service-between-NYC-and-Staten-Island', function () {
    return redirect()->route('service','limo-service-between-nyc-and-staten-island')->withStatus(302);
});
Route::get('limo-service-between-NYC-and-Queens', function () {
    return redirect()->route('service','limo-service-between-nyc-and-queens')->withStatus(302);
});
Route::get('limousine-service-in-Manhattan', function () {
    return redirect()->route('service','limousine-service-in-manhattan')->withStatus(302);
});
Route::get('limo-service-between-NYC-and-The-Bronx', function () {
    return redirect()->route('service','limo-service-between-nyc-and-the-bronx')->withStatus(302);
});

// ##########Book By Area#########################
Route::get('limousine-service-to-niagara-falls-and-upstate', function () {
    return redirect()->route('service','limousine-service-to-niagara-falls-and-upstate')->withStatus(302);
});
Route::get('limousine-service-to-washington-DC', function () {
    return redirect()->route('service','limousine-service-to-washington-dc')->withStatus(302);
});
Route::get('limousine-service-to-boston', function () {
    return redirect()->route('service','limousine-service-to-boston')->withStatus(302);
});

// ################# end redirect routs#########################################################################
#################### System #################################
Route::controller(SystemController::class)->prefix('user')->name('system.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/reservation', 'reservation')->name('reservation');
    Route::get('/password', 'password')->name('forget');
    Route::get('/quote', 'quote')->name('quote');
});
#################### Blogs #################################
Route::controller(BlogController::class)->prefix('blogs')->group(function () {
    Route::get('/{url}', 'single_blog')->name('single-blog');
    Route::get('/', 'blogs')->name('blogs');
});


#################### contact#################################
Route::controller(ContactController::class)->prefix('contact-us')->name('contact.')->group(function () {
    Route::get('/', 'index')->name('show');
    Route::post('/', 'store')->name('store');
});
####################service#################################
// services
Route::get('services/{url}', [HomeController::class, 'service'])->name('service');
// 
Route::get('new-york-car-service', function () {
    return view('frontend/services/car-service-nyc');
})->name('car-service-nyc');
Route::get('limo-service-nyc', function () {
    return view('frontend/services/limo-service-nyc');
})->name('limo-service-nyc');
// ################# fleets ###########################
Route::get('/fleets/{url}', [HomeController::class, 'fleet'])->name('fleets');
// ################# about us ###########################
Route::get('about-us', function () {
    return view('frontend/about');
})->name('about');
// ################# blogs ###########################
// Route::get('blogs', function () {
//     return view('frontend/blogs/blog');
// })->name('blogs');
Route::get('blogs/advantage-of-limo', function () {
    return view('frontend/blogs/advantage-of-limo');
})->name('advantage-of-limo');
Route::get('blogs/5-reasons-why-using-a-black-car-service-is-better-than-uber', function () {
    return view('frontend/blogs/black-car-service');
})->name('black-car-service');
Route::get('blogs/sweet-16', function () {
    return view('frontend/blogs/sweet-16');
})->name('sweet-16');
Route::get('blogs/navigating-local-limo-services', function () {
    return view('frontend/blogs/navigating-local');
})->name('navigating-local');
Route::get('blogs/transportation-to-airport', function () {
    return view('frontend/blogs/transportation-to-airport');
})->name('transportation-to-airport');

Route::get('blogs/travel-with-best-limousine-service-brooklyn', function () {
    return view('frontend/blogs/travel-with-best-limousine');
})->name('travel-with-best-limousine');

Route::get('blogs/unveiling-the-different-types-of-limos-services', function () {
    return view('frontend/blogs/types-of-limousines');
})->name('types-of-limousines');

// Route::get('blogs/navigate-nyc-in-luxury-at-an-affordable-price-for-limo', function () {
//     return view('frontend/blogs/navigate-nyc-in-luxury');
// })->name('navigate-nyc-in-luxury');

 
