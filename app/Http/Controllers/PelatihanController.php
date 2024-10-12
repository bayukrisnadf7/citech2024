<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function pelatihan()
    {

        return view('pelatihan.menu-pelatihan')->with([
            'title' => 'Pelatihan | RevoEnergy.',
        ]);
    }

    public function detail_pelatihan()
    {
        return view('pelatihan.detail-pelatihan')->with([
            'title' => 'Detail Pelatihan | RevoEnergy.',
        ]);
    }
}

    

