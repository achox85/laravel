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
    <link href="{{ asset('css/warna.css') }}" rel="stylesheet">
    <link href="{{ asset('css/warnaperiodik.css') }}" rel="stylesheet">
    <link href="{{ asset('font/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tes.css') }}" rel="stylesheet">
    @yield('css')
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('js')

</head>
<body>
    <div id="app">
        @include('parts.header')
        <div class="bingkai">
            @yield('content')
        </div>
    </div>
</body>
</html>
