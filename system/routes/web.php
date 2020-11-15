<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
Route::get('/user', function () {
    return view('template.user');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/beranda2', [HomeController::class, 'showBeranda2']);
Route::get('/kategori2', [HomeController::class, 'showKategori2']);
Route::get('/login2', [HomeController::class, 'showLogin2']);
Route::get('/promo2', [HomeController::class, 'showPromo2']);


Route::get('/produk2', [ProdukController::class, 'index']);
Route::get('/produk2/create', [ProdukController::class, 'create']);
Route::post('/produk2', [ProdukController::class, 'store']);
Route::get('produk2/{produk2}', [ProdukController::class, 'show']);
Route::get('produk2/{produk2}/edit', [ProdukController::class, 'edit']);
Route::put('produk2/{produk2}', [ProdukController::class, 'update']);
Route::delete('produk2/{produk2}', [ProdukController::class, 'destroy']);

Route::get('/kategori2', [KategoriController::class, 'index']);
Route::get('/kategori2/create', [KategoriController::class, 'create']);
Route::post('/kategori2', [KategoriController::class, 'store']);
Route::get('kategori2/{kategori2}', [KategoriController::class, 'show']);
Route::get('kategori2/{kategori2}/edit', [KategoriController::class, 'edit']);
Route::put('kategori2/{kategori2}', [KategoriController::class, 'update']);
Route::delete('kategori2/{kategori2}', [KategoriController::class, 'destroy']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);