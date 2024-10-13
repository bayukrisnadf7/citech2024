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
}

    

