<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbUnsur;

class Periodik extends Controller
{
    public function coba(){
        $unsur=TbUnsur::get();
        return view('halaman.utama')->with([
                                            'aktif'=>'periodik',
                                            'unsur'=>$unsur
                                        ]);
    }
}
