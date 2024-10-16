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
        return view('cart.index')->with([
            'title' => 'Cart | RevoEnergy.',
        ]);
    }
    public function pengiriman(){
        return view('pengiriman.index')->with([
            'title' => 'Cart | RevoEnergy.',
        ]);
    }
}
