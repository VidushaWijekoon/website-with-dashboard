<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('rtech/images/favicon.png') }}" rel="icon">
    <link href="{{ asset('rtech/images/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    @include('libraries.rtech.styles')
    @stack('style')
</head>

<body>

    <!-- ======= Top Bar & Header ======= -->
    @include('components.rtech.navbar')

    <main id="main">

        @yield('content')

    </main>
    @include('components.rtech.footer')
    @include('libraries.rtech.scripts')
    @stack('scripts')
</body>

</html>