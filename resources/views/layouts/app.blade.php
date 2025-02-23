<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tugas Periodik') }}</title>
   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/warna.css').'?v='.Config('app.ver') }}" rel="stylesheet">
    <link href="{{ asset('css/warnaperiodik.css').'?v='.Config('app.ver') }}" rel="stylesheet">
    <link href="{{ asset('font/style.css').'?v='.Config('app.ver') }}" rel="stylesheet">
    <link href="{{ asset('css/tes.css').'?v='.Config('app.ver') }}" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/tablet.css').'?v='.Config('app.ver') }}" media="screen and (max-width: 1000px)">
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('js')
    <script>
        $(document).ready(function(){   
            $(document).on('click','.play',function(e){
                let cr = $(this).find('.icm').hasClass('icon-play');
                if(cr==true){
                    $(this).find('.icm').removeClass('icon-play').addClass('icon-pause');
                    document.getElementById("pageSound").play();
                }else{
                    $(this).find('.icm').removeClass('icon-pause').addClass('icon-play');
                    document.getElementById("pageSound").pause();
                }
            });

            var MDLP = $("#mdlProfileCenter").modal({show:false});
            $(document).on("click",".icn.about",function(){
                MDLP.modal('show');
            });
        })
    </script>
</head>
<body>
    <div id="app">
        @include('parts.header')
        <div class="bingkai">
            @yield('content')
        </div>
    </div>
    <audio id="pageSound" loop>
        <source src="{{asset('musik.mp3')}}" type="audio/mpeg">
    </audio>
    @include('parts.profile')
</body>
</html>
