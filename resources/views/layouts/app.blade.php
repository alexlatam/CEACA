<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('title')

    @include('common.head')
    <!-- Scripts -->

    <!-- Fonts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Styles -->
    

   <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .nav-item:hover {
      background-color: #4e8b3d;

    }

    .nav-item:hover .nav-link {
      color: #fff;

    }

    #sing_out:hover {
      background-color: inherit !important;
    }

    .conten-login-register{
        padding-top: 5rem;
    }

  </style>
</head>
<body style="background-color: #eee;">
    <div id="app">

        <main class="conten-login-register">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>