<?php

use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\UserController;

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
Route::get('/forum', [ForumController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/detail_forum', [ForumController::class, 'detail']);
Route::get('/detail_artikel', [ArtikelController::class, 'detail']);
Route::get('/pelatihan', [PelatihanController::class, 'pelatihan']);
Route::get('/detail-pelatihan', [PelatihanController::class, 'detail_pelatihan']);
Route::get('/cart-produk', [ProdukController::class, 'cart']);
Route::get('/cart-pelatihan', [PelatihanController::class, 'cart']);
Route::get('/pengiriman', [ProdukController::class, 'pengiriman']);
Route::get('/pelatihan-online', [PelatihanController::class, 'pelatihan_online']);
Route::get('/pelatihan-offline', [PelatihanController::class, 'pelatihan_offline']);
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang_kami.index');

Route::prefix('profile')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name(name: 'profile.index');
    Route::get('/riwayat-transaksi', [UserController::class, 'riwayatTransaksi'])->name('profile.riwayat_transaksi');
    Route::get('/pelatihan-diikuti', [UserController::class, 'pelatihanDiikuti'])->name('profile.pelatihan_diikuti');
    Route::get('/point-ewallet', [UserController::class, 'pointEwallet'])->name('profile.point_ewallet');
    Route::get('/ubah-password', [UserController::class, 'ubahPassword'])->name('profile.ubah_password');
    Route::get('/kelola-artikel', [UserController::class, 'kelolaArtikel'])->name('profile.kelola_artikel');
    Route::get('/pertanyaan-forum', [UserController::class, 'pertanyaanForum'])->name('profile.pertanyaan_forum');
    Route::get('/jawaban-forum', [UserController::class, 'jawabanForum'])->name('profile.jawaban_forum');
    Route::get('/bookmark', [UserController::class, 'bookmark'])->name('profile.bookmark');
});
