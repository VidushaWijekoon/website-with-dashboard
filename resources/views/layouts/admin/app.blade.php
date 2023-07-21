<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Rtech Internation" />
    <meta name="author" content="Rtech Internation" />
    <meta name="keywords" content="Rtech Internation" />



    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    @include('libraries.admin.styles')
</head>

<body>

    <div class="wrapper">
        @include('components.admin.asidebar')
        <div class="main">
            @include('components.admin.navbar')
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>

    @include('libraries.admin.scripts')
</body>

</html>