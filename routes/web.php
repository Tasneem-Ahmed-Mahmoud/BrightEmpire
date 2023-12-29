<?php

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
#################### System #################################
Route::controller(SystemController::class)->prefix('user')->name('system.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/reservation', 'reservation')->name('reservation');
    Route::get('/password', 'password')->name('forget');
    Route::get('/quote', 'quote')->name('quote');
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
Route::get('blogs', function () {
    return view('frontend/blogs/blog');
})->name('blogs');
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
// ################# redirect###########################
// redirect homepage
Route::get('http://www.brightempirelimo.com',function(){
    return redirect()->away('/', 302); 
 });Route::redirect('http://www.brightempirelimo.com', '/new-route');