<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SystemController;

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
include_once __DIR__.'/dashboard.php';

Route::get('/',[HomeController::class,'index'])->name('landing');
#################### System #################################
Route::controller(SystemController::class)->prefix('user')->name('system.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
     Route::get('/reservation', 'reservation')->name('reservation');
      Route::get('/password', 'password')->name('forget');
       Route::get('/quote', 'quote')->name('quote');
  
});
// services
Route::get('services/{url}',[HomeController::class,'service'])->name('service');
// fleet
Route::get('/fleets/{url}',[HomeController::class,'fleet'])->name('fleets');

