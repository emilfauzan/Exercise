<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\collectionController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\admingalleryController;
use App\Http\Controllers\admincollectionController;
// use App\Http\Controllers\AgresiaController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [homeController::class, 'home']);
Route::get('/collection', [collectionController::class, 'collection']);
Route::get('/gallery', [galleryController::class, 'gallery']);
Route::get('/contact', [contactController::class, 'contact']);
Route::get('/admingallery', [admingalleryController::class, 'admingallery']);
Route::get('/admincollection', [admincollectionController::class, 'admincollection']);
