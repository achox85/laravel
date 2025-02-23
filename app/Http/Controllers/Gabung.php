<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Gabung extends Controller
{
    public function index(){
        $unsur=\App\Models\TbUnsur::leftjoin('tbjenis as tbj','tbj.id','tb_unsurs.jenis')
        ->select([
            'tb_unsurs.*',
            'tbj.nama as namajenis',
            'tbj.namakelas',
        ])->get();
        return view('halaman.gabung')->with(['aktif'=>'gabung','unsur'=>$unsur]);;
    }

    public function sugesti(Request $req){
        $IDS=!isset($req->id) ? [] : $req->id;
        $senyawa=[];
        $JML = count($IDS);
        if(count($IDS)){
            $senyawa=\App\Models\TbGabung::leftjoin('tb_senyawas as ts', 'ts.id', 'tb_gabungs.id_senyawa')    
                    ->whereIn('tb_gabungs.id_unsur',$IDS)
                    ->select([
                        "ts.id",
                        "ts.elemen",
                        "ts.kode",
                        DB::raw("count(ts.id) as jml")
                    ])
                    ->groupBy("ts.id")
                    ->having("jml",'>=',$JML)
                    ->get();
            return response()->json(['data'=>$senyawa]);
        }
    }

    function senyawa(Request $req){
        $data=\App\Models\TbGabung::leftjoin('tb_unsurs as tu','tu.no','tb_gabungs.id_unsur')
        ->leftjoin('tbjenis as tj','tj.id','tu.jenis')
        ->select([
            'tu.no',
            'tu.code',
            'tu.nama',
            'tj.namakelas'
        ])
        ->where('tb_gabungs.id_senyawa','=',$req->id)
        ->get();
        $senyawa = \App\Models\TbSenyawa::find($req->id);
        return response()->json(['hasil'=>$data,'senyawa'=>$senyawa]);
    }
}


