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
}