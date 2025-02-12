<div class="kotak-header">
   <div class="difgambar tengah">
<div class="relatif">
            <div class="judul">Elementify</div>
            <img src="/gambar/awan.svg" class="awan"> 
</div>
    </div>
   <div class="difmenu tengah"> 
    <ul class="list">
        @php 
        $halaman = '';
        $halamangabung = '';
        if($aktif == 'periodik'){
            $halaman = 'aktif';
        }
        else if($aktif == 'gabung'){
            $halamangabung = 'aktif';
        }
        @endphp
        <li class="{{$halaman}}"> 
            <a href='{{route("halaman-utama")}}'>
                Tabel Periodik
            </a>
        </li>
        <li class="{{$halamangabung}}"> 
            <a href='{{route("halaman-gabung")}}'>
                Gabung Unsur
            </a>
        </li> 
     </ul>
   </div>
   <div class="difkanan tengah"> 
        <div class="pencarian"> 
                <span class="icon-search"></span>  
                <input type="text"/> 
        </div>
        <a class="icn" href='javascript:'> 
            <i class="icon-cog"></i>
        </a>
   </div>
</div>
