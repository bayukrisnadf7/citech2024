<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function pelatihan()
    {
        return view('pelatihan.menu-pelatihan');
    }
}
