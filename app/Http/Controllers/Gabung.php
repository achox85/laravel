<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gabung extends Controller
{
    public function index(){
        return view('halaman.gabung')->with(['aktif'=>'gabung']);;
    }
}

