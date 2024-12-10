<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('predictions', App\Http\Controllers\PredictionController::class);
Route::resource('mls', App\Http\Controllers\MlController::class);
Route::resource('data', App\Http\Controllers\DataController::class);

Route::post('/predictions/predict', [PredictionController::class, 'predict'])->name('predictions.predict');
