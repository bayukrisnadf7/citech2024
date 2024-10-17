<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('profile.profile')->with(['title' => 'Profile | RevoEnergy.']);
    }
    public function riwayatTransaksi() {
       return view('profile.riwayat-transaksi')->with(['title' => 'Riwayat Transaksi | RevoEnergy.']);
    }
    public function pelatihanDiikuti() {
        return view('profile.riwayat-pelatihan')->with(['title' => 'Riwayat Pelatihan | RevoEnergy.']);
    }
    public function pointEwallet() {
        return view('profile.ewallet')->with(['title' => 'E-Wallet | RevoEnergy.']);
    }
    public function ubahPassword() {
        return view('profile.ubah-password')->with(['title' => 'Ubah Password | RevoEnergy.']);
    }
    public function kelolaArtikel() {
        return view('profile.kelola-artikel')->with(['title' => 'Kelola Artikel | RevoEnergy.']);
    }
    public function pertanyaanForum() {
        return view('profile.pertanyaan-forum')->with(['title' => 'Pertanyaan Forum | RevoEnergy.']);
    }
    public function jawabanForum() {
        return view('profile.jawban-forum')->with(['title' => 'Jawaban Forum | RevoEnergy.']);
    }
    public function bookmark() {
        return view('profile.bookmark')->with(['title' => 'Bookmark | RevoEnergy.']);
    }
}
