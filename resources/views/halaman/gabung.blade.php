@extends('layouts.app')

@section('content')
<div class="kotak dsbh">
  <div class="kolomkiri">
      <h3>Pilih Unsur</h3> 
      <div class="pilihan">
        <div class="a">
          <i id="trigger" class="icon-add-outline"></i>
        </div>
      </div>
          <div class="kolombawah">
            <h3>Hasil</h3>
              <div class="c bgu borderrad">   
                 <div><div class="big-unsur mh80">
                  <h1 class="kode"></h1>
                  <div class='nama'></div>
              </div></div>
                  <div class="result">
                    <div class="deskripsi">
                      <div class="big">
                        Deskripsi
                      </div>
                      <div class="inf clsketerangan">
                     
                      </div>
                    </div>
                  </div>
              </div>
          </div>
  </div>
  <div class="kolomkanan">
    <h3>Turunan Unsur</h3>
    <div class="b borderrad p10">
      <div class="sny">
      Senyawa
      </div>
        <div class="elm">
        Elemen
        </div>
          <div class="b1">
            
          </div>
    </div> 
  </div>
  
</div>

@include('halaman.modal.selector')
@endsection

@section('css')
<link href="{{ asset('css/gabung.css') }}" rel="stylesheet">
@endsection
@section('js')
<script id="tpl" type="text/html">
        <div dataid="%%id%%" class="kotakunsur %%namakelas%%">
          <div class="unsur">
            <div class="hapus">
              <a class="linkdel text-danger" href="javascript:">
                  X
              </a>
            </div>
                        <div class="nomor">%%nomor%%</div>
                        <div class="simbol">%%simbol%%</div>
                        <div class="nama">%%nama%%</div>
          </div>
        </div>
</script>
<script src='{{ asset("js/halaman/gabung.js").'?v='.Config('app.ver') }}'></script>
@endsection