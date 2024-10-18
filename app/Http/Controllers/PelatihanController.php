<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function pelatihan()
    {
        return view('pelatihan.index')->with([
            'title' => 'Pelatihan | RevoEnergy.',
        ]);
    }

    public function detail_pelatihan()
    {
        return view('detail_pelatihan.index')->with([
            'title' => 'Detail Pelatihan | RevoEnergy.',
        ]);
    }
    public function pelatihan_online()
    {
        return view('pelatihan.pelatihan-online')->with([
            'title' => 'Detail Pelatihan | RevoEnergy.',
        ]);
    }

    public function pelatihan_offline()
    {
        return view('pelatihan.pelatihan-offline')->with([
            'title' => 'Detail Pelatihan | RevoEnergy.',
        ]);
    }
    public function cart(){
        return view('cart-pelatihan.index')->with([
            'title' => 'Cart Pelatihan | RevoEnergy.',
        ]);
    }
}