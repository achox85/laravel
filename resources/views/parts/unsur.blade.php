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
                     <div class="popup hide">
                        <div class="c-row">
                            <div class="col-nomor">
                                <div class="nomor">{{$tmp->no}}</div>
                            </div>
                            <div class="col-atomic text-right">
                                <div class="atomic">{{$tmp->atomic_mass}}</div>
                            </div>
                          
                        </div>
                        <div class="simbol">{{$tmp->code}}</div>
                        <div class="nama">{{$tmp->nama}}</div>
                        <input type="hidden" value="{{ $tmp->namajenis }}" id="inpJNS">
                        <div class="hidden dsc">{{ $tmp->deskripsi }} </div>
                        <div class="hidden mtp">{{ $tmp->melting_point}} </div>
                        <div class="hidden btp">{{ $tmp->boiling_point}} </div>
                     </div>
</div>
@endif