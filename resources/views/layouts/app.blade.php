<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <meta name="referrer" content="origin-when-cross-origin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/fav/favicon.webp')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/img/fav/favicon.webp')}}">

    <link rel="manifest" href="{{asset('./manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/fav/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <link rel="preload" as="style" href="{{asset('assets/css/top.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/top.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/libs.css.php')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bottom.css')}}" />

    @yield('styles')

</head>
<body>
    @include('layouts.header')
        <main class="main-page">
            @yield('content')
        </main>
    @include('layouts.footer')

    @yield('startScripts')
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script defer src="{{asset('assets/js/libs.js.php')}}"></script>
        <script defer src="{{asset('assets/js/utils/functions.js')}}"></script>
        <script defer src="{{asset('assets/js/main.js')}}"></script>
    @yield('scripts')

</body>
</html>
