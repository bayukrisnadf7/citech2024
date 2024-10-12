<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }

    public function tes()
    {
        return view('tes');
    }
}
