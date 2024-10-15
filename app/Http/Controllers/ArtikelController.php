<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view('artikel.index')->with([
            'title' => 'Artikel | RevoEnergy.',
        ]);
    }

    public function detail(){
        return view('detail_artikel.index')->with([
            'title' => 'Artikel | RevoEnergy.',
        ]);
    }
}
