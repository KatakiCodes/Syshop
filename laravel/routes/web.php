<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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

Route::prefix('/cart')->group(function () {
    Route::get('/', [CartController::class,'show'])->name('cart.show');
    Route::post('/add', [CartController::class,'add'])->name('cart.add');
    Route::post('/update', [CartController::class,'update'])->name('cart.update');
    Route::post('/remove', [CartController::class,'remove'])->name('cart.remove');
    Route::get('/clear', [CartController::class,'clear'])->name('cart.clear');
});

Route::get('/category/{id}',[CategoryController::class, 'index'])->name('category.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/produtos', [ProdutoController::class,'index'])->name('produto.index');
Route::get('/produto/{slug}', [ProdutoController::class,'show'])->name('produto.show');
Route::post('auth', [LoginController::class,'auth'])->name('login.auth');
Route::post('logout', [LoginController::class,'logout'])->name('logout');