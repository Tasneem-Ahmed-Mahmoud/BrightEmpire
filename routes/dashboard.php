<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\FleetController;
use App\Http\Controllers\Dashboard\ImageController;
use App\Http\Controllers\Dashboard\FeatureController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CategoryController;
####################  Auth #################################
Route::controller(AuthController::class)->group(function () {   
    Route::get('/login', 'login_form');
    Route::post('/login', 'login')->name('login');
  
    });

Route::prefix('dashboard')->middleware('auth')->group(function(){

    // logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
#################### main service #################################
Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{category}', 'edit')->name('edit');
    Route::put('/{category}', 'update')->name('update');
    Route::delete('/{category}', 'destroy')->name('destroy');
  
});
####################  services #################################
Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{service}', 'edit')->name('edit');
    Route::put('/{service}', 'update')->name('update');
    Route::delete('/{service}', 'destroy')->name('destroy');
  
});


####################  Fleet #################################
Route::controller(FleetController::class)->prefix('fleets')->name('fleets.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{fleet}', 'edit')->name('edit');
    Route::put('/{fleet}', 'update')->name('update');
    Route::delete('/{fleet}', 'destroy')->name('destroy');
  
});

####################  Feature #################################
Route::controller(FeatureController::class)->prefix('features')->name('features.')->group(function () {
    Route::get('/index/{fleet_id}', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/{feature}', 'edit')->name('edit');
    Route::put('/{feature}', 'update')->name('update');
    Route::delete('/{feature}', 'destroy')->name('destroy');
  
});
####################  fleet images #################################
Route::controller(ImageController::class)->prefix('images')->name('images.')->group(function () {
    Route::get('/index/{fleet_id}', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::put('/{image}', 'update')->name('update');
    Route::delete('/{image}', 'destroy')->name('destroy');
  
});

####################  Profile #################################
Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/', 'edit')->name('profile.edit');
     Route::patch('/{user}', 'updateProfile')->name('profile.update');
      Route::put('/', 'updatePassword')->name('password.update');
});


Route::get('/admin',function(){
    return view('dashboard.index');
})->name('dashboard');





});