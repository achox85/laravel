@php 
$tmp=false;
foreach($unsur as $i=>$data){
    if($data->no == $nomor){
        $tmp=$data;
        break;
    }
}
@endphp
@if($tmp)
<div class="unsur">
                     <div class="nomor">{{$tmp->no}}</div>
                     <div class="simbol">{{$tmp->code}}</div>
                     <div class="nama">{{$tmp->nama}}</div>
</div>
@endif