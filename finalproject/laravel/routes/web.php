<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\PrivateTripDetailController;
use App\Http\Controllers\OpenTripDetailController;
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

Route::get('/auth', [AuthController::class, 'index'])->name('auth');
Route::post('/process-login', [AuthController::class, 'login'])->name('process-login');


Route::get('/', [DiscoveryController::class, 'index'])->name('discovery');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
Route::get('/destinationdetail', [DestinationdetailController::class, 'index'])->name('destinationdetail');

Route::get('/destinationcheckout', [DestinationdetailController::class, 'checkout'])->name('destinationcheckout');
Route::get('/destinationsummary', [DestinationdetailController::class, 'summary'])->name('destinationsummary');
Route::get('/destinationsuccess', [DestinationdetailController::class, 'success'])->name('destinationsuccess');

Route::get('/privatetripdetail', [PrivatetripdetailController::class, 'index'])->name('privatetripdetail');
Route::get('/opentripdetail', [OpentripdetailController::class, 'index'])->name('opentripdetail');
Route::get('/privatetripcheckout', [PrivatetripcheckoutController::class, 'index'])->name('privatetripcheckout');
Route::get('/privatetripsummary', [PrivatetripsummaryController::class, 'index'])->name('privatetripsummary');
Route::get('/privatetripsuccess', [PrivatetripsuccessController::class, 'index'])->name('privatetripsuccess');
Route::get('/opentripcheckout', [OpentripcheckoutController::class, 'index'])->name('opentripcheckout');
Route::get('/opentripsummary', [OpentripsummaryController::class, 'index'])->name('opentripsummary');
Route::get('/opentripsuccess', [OpentripsuccessController::class, 'index'])->name('opentripsuccess');

// Route::prefix('admin')->middleware('administrator')->group(function () {
//     Route::get('discovery', [DiscoveryController::class, 'index'])->name('discovery');
// });
