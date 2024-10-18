<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return view('produk.index')->with([
            'title' => 'Detail Produk | RevoEnergy.',
        ]);
    }
    public function detail(){
        return view('detail_produk.index')->with([
            'title' => 'Detail Produk | RevoEnergy.',
        ]);
    }
    public function cart(){
        return view('cart-produk.index')->with([
            'title' => 'Cart Produk | RevoEnergy.',
        ]);
    }
    public function pengiriman(){
        return view('pengiriman.index')->with([
            'title' => 'Pengiriman | RevoEnergy.',
        ]);
    }
}
