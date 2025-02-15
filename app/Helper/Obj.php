<?php
namespace App\Helper;

class Obj{
 public static function warna($id,$data){
    
    $box=false;
    if(count($data)){
       foreach($data as $i=>$req){
        if($req->no == $id){
            $box = $req;
            break;
        }
       }
    }

    return $box;
    
 }  
}
?>