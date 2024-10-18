<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index() {
        return view('tentang_kami.tentang-kami-index')->with([
            'title' => 'Tentang Kami | RevoEnergy.'
        ]);
    }
}
