<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Travel Dreams">
    <meta name="author" content="Travel Dreams">
    <meta name="keywords" content="Travel Dreams">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard')</title>

    @include('libraries.admin.styles')
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        @include('components.admin.aside')
        <div class="main">
            @include('components.admin.navbar')
            <main class="content">
                @yield('content')
            </main>
            @include('components.admin.footer')
        </div>
    </div>

    @include('libraries.admin.scripts')
    @livewireScripts
</body>

</html>