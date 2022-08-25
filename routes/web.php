<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Http\Controllers\HomeController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/category-all/{slug}', 'category');
    Route::get('/product/{slug}', 'product');
    Route::post('/search', 'search');
    
    // ajax
    Route::get('/category', 'getCategory')->name('category');
    Route::get('/detail/{id}', 'detailProduct');
    Route::get('/data', 'data')->name('data');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.view');
    Route::post('/login', 'auth')->name('login.auth');
});
