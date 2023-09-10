<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'home']);
Route::get('/services', [SiteController::class, 'services']);
Route::get('/contact-us', [SiteController::class, 'contactUs']);
Route::get('/about-us', [SiteController::class, 'aboutUs']);
Route::get('/feedback', [SiteController::class, 'feedback']);

Route::get('/login', [SiteController::class, 'loginForm'])->name('login');
Route::post('/login', [SiteController::class, 'login']);
Route::post('/register', [SiteController::class, 'register']);
Route::get('/register', [SiteController::class, 'registerForm']);

Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', [SiteController::class, 'logout']);

});
