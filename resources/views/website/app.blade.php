<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Tick It</title>
    <link rel="shortcut icon" href="{{ asset("assets/icons/favicon.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("assets/icons/apple-touch-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/icons/apple-touch-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("assets/icons/apple-touch-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("assets/icons/apple-touch-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/icons/apple-touch-icon-180x180.png") }}">
    @vite('resources/css/app.css')
</head>
<body class="antialiased font-share-tech">
    <!-- Header -->
    @include('website.layout.header')

    <!-- Main -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('website.layout.footer')
</body>
</html>