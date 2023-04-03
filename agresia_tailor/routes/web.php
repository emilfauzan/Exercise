<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\collectionController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\admingalleryController;
use App\Http\Controllers\admincollectionController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AgresiaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [AgresiaController::class, 'home']);
Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/collection', [collectionController::class, 'collection'])->name('collection');
Route::get('/gallery', [galleryController::class, 'gallery'])->name('gallery');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');

// LOGIN PROCESS
// Route::get('/signup', [signupController::class, 'signup'])->name('signup');
Route::post('/process-login', [loginController::class, 'login'])->name('process-login');
Route::get('/login', [loginController::class, 'index'])->name('login');

// ADMIN GROUP
Route::prefix('admin')->middleware('isAdmin')->group(function () {
    // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // ADMIN FUNCTIONS
    Route::get('admingallery', [admingalleryController::class, 'admingallery'])->name('admingallery');
    Route::get('admincollection', [admincollectionController::class, 'admincollection'])->name('admincollection');
});
