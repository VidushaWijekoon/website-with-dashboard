<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('frontend/images/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/images/favicon.png') }}" rel="apple-touch-icon">

    @include('libraries.admin.styles')
    @livewireStyles
</head>

<body>

    <div class="main-wrapper">
        @include('components.admin.header')
        @include('components.admin.sidebar')

        @yield('content')
        <div class="sidebar-overlay" data-reff=""></div>
    </div>

    @include('libraries.admin.scripts')
    @livewireScripts
    @stack('script')
</body>

</html>