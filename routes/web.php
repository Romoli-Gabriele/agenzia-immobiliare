<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ReservationController;
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
Route::resource('apartments', ApartmentController::class);
Route::resource('avaibilities', AvailabilityController::class);
Route::resource('lines', LineController::class);
Route::resource('neighborhoods', NeighborhoodController::class);
Route::resource('photos', PhotoController::class);
Route::resource('reservations', ReservationController::class);
