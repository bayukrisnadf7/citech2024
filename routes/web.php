<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('home.home', [
        'title' => 'Beranda | RevoEnergy.',
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/detail_produk', [ProdukController::class, 'detail']);
