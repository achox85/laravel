@extends('layouts.app')

@section('content')
<div class="kotak">
<div class="col-md-12">
    <h3>Media</h3>
    <div class="box">
        <div class="kol1">
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(1,$unsur)->namakelas }}">
                  @include('parts.unsur',['nomor'=>1,'unsur'=>$unsur])
               </div>
               <div class="kotakunsur"></div>
               <div class="kotakunsur"></div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(3,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>3,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(4,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>4,'unsur'=>$unsur])</div>
               <div class="kotakunsur"></div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(11,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>11,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(12,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>12,'unsur'=>$unsur])</div>
               <div class="kotakunsur"></div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(19,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>19,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(20,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>20,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(21,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>21,'unsur'=>$unsur])</div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(37,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>37,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(38,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>38,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(39,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>39,'unsur'=>$unsur])</div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(55,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>55,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(56,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>56,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(57,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>57,'unsur'=>$unsur])</div>
            </div>
            <div class="baris">
               <div class="kotakunsur {{ Obj::warna(87,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>87,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(88,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>88,'unsur'=>$unsur])</div>
               <div class="kotakunsur {{ Obj::warna(89,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>89,'unsur'=>$unsur])</div>
            </div>
        </div>
        <div class="kol2">
                <!-- Baris 1 -->
               <div class="baris">
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur {{ Obj::warna(2,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>2,'unsur'=>$unsur])</div>
               </div>
               <!-- Baris 2 -->
               <div class="baris"> 
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur {{ Obj::warna(5,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>5,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(6,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>6,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(7,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>7,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(8,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>8,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(9,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>9,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(10,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>10,'unsur'=>$unsur])</div>
               </div>
               <div class="baris">
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur"></div>
                  <div class="kotakunsur {{ Obj::warna(13,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>13,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(14,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>14,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(15,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>15,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(16,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>16,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(17,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>17,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(18,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>18,'unsur'=>$unsur])</div>
               </div>
               <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(22,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>22,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(23,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>23,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(24,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>24,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(25,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>25,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(26,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>26,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(27,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>27,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(28,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>28,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(29,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>29,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(30,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>30,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(31,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>31,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(32,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>32,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(33,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>33,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(34,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>34,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(35,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>35,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(36,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>36,'unsur'=>$unsur])</div>
               </div>
               <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(40,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>40,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(41,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>41,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(42,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>42,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(43,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>43,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(44,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>44,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(45,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>45,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(46,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>46,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(47,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>47,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(48,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>48,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(49,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>49,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(50,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>50,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(51,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>51,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(52,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>52,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(53,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>53,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(54,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>54,'unsur'=>$unsur])</div>
               </div>
               <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(72,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>72,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(73,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>73,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(74,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>74,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(75,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>75,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(76,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>76,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(77,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>77,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(78,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>78,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(79,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>79,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(80,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>80,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(81,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>81,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(82,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>82,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(83,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>83,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(84,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>84,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(85,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>85,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(86,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>86,'unsur'=>$unsur])</div>
               </div>
               <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(104,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>104,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(105,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>105,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(106,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>106,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(107,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>107,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(108,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>108,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(109,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>109,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(110,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>110,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(111,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>111,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(112,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>112,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(113,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>113,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(114,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>114,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(115,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>115,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(116,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>116,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(117,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>117,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(118,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>118,'unsur'=>$unsur])</div>
               </div>
        </div>
        <div class="kol3">
        <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(58,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>58,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(59,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>59,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(60,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>60,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(61,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>61,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(62,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>62,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(63,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>63,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(64,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>64,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(65,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>65,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(66,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>66,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(67,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>67,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(68,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>68,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(69,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>69,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(70,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>70,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(71,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>71,'unsur'=>$unsur])</div>
                  <div class="kotakunsur"></div>
               </div>
        <div class="baris">
                  <div class="kotakunsur {{ Obj::warna(90,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>90,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(91,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>91,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(92,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>92,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(93,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>93,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(94,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>94,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(95,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>95,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(96,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>96,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(97,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>97,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(98,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>98,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(99,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>99,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(100,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>100,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(101,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>101,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(102,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>102,'unsur'=>$unsur])</div>
                  <div class="kotakunsur {{ Obj::warna(103,$unsur)->namakelas }}">@include('parts.unsur',['nomor'=>103,'unsur'=>$unsur])</div>
                  <div class="kotakunsur"></div>
               </div>
        </div>
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

</div>
@include('halaman.modal.popup')
@endsection

@section('css')
<link href="{{ asset('css/utama.css') }}" rel="stylesheet">
@endsection
@section('js')
<script src="{{ asset('js/halaman/utama.js') }}"></script>
@endsection