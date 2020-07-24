<!DOCTYPE html>
<html lang="es">

<head>
    @include('common.head')
    @yield('head')
</head>

<body class="cuerpo-main">

    @yield('content')

    @include('common.footer')

    @include('common.footer_scripts')

</body>

</html>