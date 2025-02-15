<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Tbjenis;
use App\Models\TbUnsur;


class seedjenis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row=[];
        $csvFile = Storage::disk('local')->path('jenis.csv');
        $file = fopen($csvFile, 'r');
        $index=0;
        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            if($index > 0){
                $nm=explode(';',$data[0]);
                $tbj = Tbjenis::where('nama','=',$nm[1])->first();
                $unsur = TbUnsur::find($nm[0]);
                $unsur->update(['jenis'=>$tbj->id]);
            // $row[]=[$unsur->id];
           }
           $index++;
        }
        
        fclose($file);
        dd($row);
    }
}
