<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{url('Frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/hero-slider.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src=" {{url('Frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>