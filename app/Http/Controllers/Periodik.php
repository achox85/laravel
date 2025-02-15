<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbUnsur;

class Periodik extends Controller
{
    public function coba(){
        $unsur=TbUnsur::leftJoin('tbjenis as tbj','tbj.id','tb_unsurs.jenis')
                        ->select([
                            'tb_unsurs.*',
                            'tbj.nama as namajenis',
                            'tbj.namakelas'
                        ])
                        ->get();
        return view('halaman.utama')->with([
                                            'aktif'=>'periodik',
                                            'unsur'=>$unsur
                                        ]);
    }
}
