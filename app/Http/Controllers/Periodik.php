<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Periodik extends Controller
{
    public function coba(){
        return view('halaman.utama')->with(['aktif'=>'periodik']);
    }
}
