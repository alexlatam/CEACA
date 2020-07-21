<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('common.head')
    @yield('title')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <!-- Styles -->

    <style type="text/css">
        .conten-login-register{
            padding-top: 7rem;
        }
    </style>
</head>

<body style="background-color: #eee;">
    <div id="app">

        <main class="conten-login-register">
            @yield('content')
        </main>
    </div>
</body>

</html>