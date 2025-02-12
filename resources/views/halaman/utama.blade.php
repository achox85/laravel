@extends('layouts.app')

@section('content')
<div class="kotak">
<div class="kolomkiri">
    <h3>Media</h3>
    <div class="box">
        
    </div>
    <div class='boxlegend'>
     <div class='kolom'>
        <div class='listlegend color1'>Logam Alkali</div>
        <div class='listlegend color2'>Semimetal</div>
        <div class='listlegend color3'>Aktinids</div>
     </div>
     <div class='kolom'>
        <div class='listlegend color4'>Logam Alkali Tanah</div>
        <div class='listlegend color5'>Non-logam Reaktif</div>
        <div class='listlegend color6'>Properti Tidak Teridentifikasi</div>
     </div>
     <div class='kolom'>
        <div class='listlegend color7'>Metal Transisi</div>
        <div class='listlegend color8'>Gas Mulia</div>
     </div>
     <div class='kolom'>
        <div class='listlegend color9'>Logam Post Transisi</div>
        <div class='listlegend color10'>Lantanida</div>
     </div>
    </div>
</div>
<div class="kolomkanan">
  <h3>Informasi</h3>
</div>
</div>

@endsection

@section('css')
<link href="{{ asset('css/utama.css') }}" rel="stylesheet">
@endsection
