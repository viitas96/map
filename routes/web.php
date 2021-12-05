<?php

use App\Http\Controllers\CityController;
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

Route::get('/', [CityController::class, 'all'])->name('home');
Route::get('/add', function () {
    return view('add');
});
Route::get('/city/{id}', [CityController::class, 'edit']);

Route::post('/addCity', [CityController::class, 'add']);
Route::post('/updateCity', [CityController::class, 'updateCity']);
Route::post('/destroy', [CityController::class, 'destroy']);
