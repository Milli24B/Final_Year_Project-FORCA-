<?php

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

use App\Http\Controllers\PredictionController;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/Dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/predict', function () {
    return app('App\Http\Controllers\PredictionController')->index();
});

// Route::get('/products/{category}', [App\Http\Controllers\PredictionController::class, 'getProductsByCategory'])->name('products');
Route::get('/products', [PredictionController::class, 'getProductsByCategory'])->name('products');
Route::get('/show', [PredictionController::class, 'show'])->name('show');
