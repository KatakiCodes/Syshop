<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    return view('index');
})->name('home.index');

Route::resource('user', UserController::class);
Route::resource('produto', ProdutoController::class);
Route::get('/cart', [CartController::class,'show'])->name('cart.index');
Route::post('auth', [LoginController::class,'auth'])->name('login.auth');
Route::post('logout', [LoginController::class,'logout'])->name('logout');