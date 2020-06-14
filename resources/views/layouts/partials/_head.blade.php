<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/maps-web.min.js'></script>
    <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/services/services-web.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/maps.css'>


    <style>
       #map {
           width: 800px;
           height: 500px;
       }
    </style>

</head>
