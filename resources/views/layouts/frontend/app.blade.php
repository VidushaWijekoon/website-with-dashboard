<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="RTech International" />
    <meta name="author" content="RTech International" />
    <meta name="keywords" content="RTech International" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>@yield('title', 'RTech International')</title>

    @include('libraries.frontend.styles')
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    @include('components.frontend.header')
    <main id="main">
        @yield('content')
    </main>
    @include('components.frontend.footer')
    @include('libraries.frontend.scripts')
</body>

</html>