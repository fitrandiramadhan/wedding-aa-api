<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SeatingController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('Food', FoodController::class);
// Route::get('/Food', [FoodController::Class, 'index']);
// Route::post('/Food', [FoodController::Class, 'store']);

Route::resource('Event', EventController::class);
Route::resource('Guest', GuestController::class);
Route::resource('Room', RoomController::class);
Route::resource('Seating', SeatingController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
