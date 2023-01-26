<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--Scustom Css-->
    @yield('css')

    <!-- Scripts -->
    
    @vite(['resources/sass/app.scss'])
    <link rel="stylesheet" href="{{ asset("plugins/owlcarousel/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/owlcarousel/owl.theme.default.min.css") }}">
</head>
<body>
    @yield('content')

    <!--Scustom Js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    @vite(['resources/js/app.js'])
    <script src="{{ asset("plugins/owlcarousel/owl.carousel.min.js") }}"></script>
    @yield('js')
</body>
</html>
