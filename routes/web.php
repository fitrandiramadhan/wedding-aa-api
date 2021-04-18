<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function() {
//     return 'hello world';
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/food', [PageController::class, 'food']);
Route::get('/accomodation', [PageController::class, 'accomodation']);
Route::get('/event', [PageController::class, 'event']);

// VIEW TEST
Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/temps', function() {
    return view('pages.temps');
});



