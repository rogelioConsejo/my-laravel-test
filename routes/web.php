<?php

use App\Http\Controllers\ProductListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);


Route::get('/products', [ProductListController::class, 'index']);

Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/categories', function () {
    return view('category-list');
});
