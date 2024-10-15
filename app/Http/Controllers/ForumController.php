<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        return view('forum.index')->with([
            'title' => 'Forum | RevoEnergy.',
        ]);
    }

    public function detail(){
        return view('detail_forum.index')->with([
            'title' => 'Detail Forum | RevoEnergy.',
        ]);
    }
}
