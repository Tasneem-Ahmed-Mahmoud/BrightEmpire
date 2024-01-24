<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\FleetController;
use App\Http\Controllers\Dashboard\ImageController;
use App\Http\Controllers\Dashboard\ReviewController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\FeatureController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CategoryController;

####################  Auth #################################

 Route::get('/login',[AuthController::class, 'login_form'])->name('admin-login');
 Route::post('/login',[AuthController::class, 'login'])->name('login');
//  ###############################################
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
    // Route::get('/filter', 'filterByCategory')->name('filter');

});
    #################### blogs #################################
Route::controller(BlogController::class)->prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{blog}', 'edit')->name('edit');
    Route::put('/{blog}', 'update')->name('update');
    Route::delete('/{blog}', 'destroy')->name('destroy'); 
});
#################### Blog Category #################################
Route::controller(CategoryController::class)->prefix('blog-categories')->name('blog-categories.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{blog-category}', 'edit')->name('edit');
    Route::put('/{blog-category}', 'update')->name('update');
    Route::delete('/{blog-category}', 'destroy')->name('destroy');
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



#################### Contact #################################
Route::controller(ContactController::class)->prefix('messages')->name('messages.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::delete('/{contact}', 'destroy')->name('destroy');
});


####################  Review #################################
Route::controller(ReviewController::class)->prefix('reviews')->name('reviews.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{review}', 'edit')->name('edit');
    Route::put('/{review}', 'update')->name('update');
    Route::delete('/{review}', 'destroy')->name('destroy');
});

});

#################### home #################################
Route::get('/home',[HomeController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/services/filter', [ServiceController::class,'filterByCategory'])->name('services.filter');
