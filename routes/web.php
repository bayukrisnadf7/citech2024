<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return view('home.home', [
        'title' => 'Beranda | RevoEnergy.',
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/tes', [RegisterController::class, 'tes']);
Route::get('/member', [MemberController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/detail_produk', [ProdukController::class, 'detail']);
Route::get('/pelatihan', [PelatihanController::class, 'pelatihan']);



Route::get('/forum', [ForumController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
