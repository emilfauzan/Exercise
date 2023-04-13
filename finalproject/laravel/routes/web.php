<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\PrivateTripDetailController;
use App\Http\Controllers\OpenTripDetailController;
use App\Http\Controllers\DestinationCheckoutController;
use App\Http\Controllers\DestinationSummaryController;
use App\Http\Controllers\DestinationSuccessController;
use App\Http\Controllers\PrivateTripCheckoutController;
use App\Http\Controllers\PrivateTripSummaryController;
use App\Http\Controllers\PrivateTripSuccessController;
use App\Http\Controllers\OpenTripCheckoutController;
use App\Http\Controllers\OpenTripSummaryController;
use App\Http\Controllers\OpenTripSuccessController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-dashboard', [AuthController::class, 'index'])->name('login-dashboard');
Route::post('/process-login', [AuthController::class, 'login'])->name('process-login');


Route::get('/', [HomeController::class, 'index'])->name('discovery');
Route::get('/destination', [HomeController::class, 'index'])->name('destination');
Route::get('/package', [HomeController::class, 'index'])->name('package');
Route::get('/aboutus', [HomeController::class, 'index'])->name('aboutus');
Route::get('/destinationdetail', [HomeController::class, 'index'])->name('destinationdetail');
Route::get('/privatetripdetail', [HomeController::class, 'index'])->name('privatetripdetail');
Route::get('/opentripdetail', [HomeController::class, 'index'])->name('opentripdetail');
Route::get('/destinationcheckout', [HomeController::class, 'index'])->name('destinationcheckout');
Route::get('/destinationsummary', [HomeController::class, 'index'])->name('destinationsummary');
Route::get('/destinationsuccess', [HomeController::class, 'index'])->name('destinationsuccess');
Route::get('/privatetripcheckout', [HomeController::class, 'index'])->name('privatetripcheckout');
Route::get('/privatetripsummary', [HomeController::class, 'index'])->name('privatetripsummary');
Route::get('/privatetripsuccess', [HomeController::class, 'index'])->name('privatetripsuccess');
Route::get('/opentripcheckout', [HomeController::class, 'index'])->name('opentripcheckout');
Route::get('/opentripsummary', [HomeController::class, 'index'])->name('opentripsummary');
Route::get('/opentripsuccess', [HomeController::class, 'index'])->name('opentripsuccess');

Route::prefix('admin')->middleware('administrator')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});