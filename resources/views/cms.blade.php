<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
  <title>Administración Ceaca</title>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Favicons -->
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
  </style>
  <!-- Custom styles for this template -->
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" target="_blank" href="https://ceaca.com/">Ceaca</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap" id="sing_out">
        <form action="/logout" method="POST" id="form_salir_sesion">
          @csrf
          <a class="nav-link" onclick="cerrarSesion()" href="#">Sign out</a>
        </form>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/cms">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/informacion">
                <span data-feather="file"></span>
                Información General
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/crear/usuario">
                <span data-feather="users"></span>
                Usuarios de la administración
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/slider/image">
                <span data-feather="users"></span>
                Imagenes Slider - Página Principal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/nosotros">
                <span data-feather="file"></span>
                Sección de Nosotros (Quienes Somos)
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/revista">
                <span data-feather="users"></span>
                Revista
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/club">
                <span data-feather="users"></span>
                Club CEACA
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/servicios">
                <span data-feather="users"></span>
                Servicios Técnicos
              </a>
            </li>
            <!--           <li class="nav-item">
            <a class="nav-link" href="/cms/service/requests">
              <span data-feather="users"></span>
              Servicios Requests
            </a>
          </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/cms/publicidades">
                <span data-feather="users"></span>
                Publicidad
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/mensajes">
                <span data-feather="users"></span>
                Solicitudes de Contacto
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms/recursos">
                <span data-feather="users"></span>
                Recursos
              </a>
            </li>
            <!--li-- class="nav-item">
              <a class="nav-link" href="/cms/cursos">
                <span data-feather="users"></span>
                Cursos (Capacitación)
              </a>
            </!--li-->
            <!--li-- class="nav-item">
            <a class="nav-link" href="/cms/cursos/requests">
              <span data-feather="users"></span>
              Cursos Requests
            </a>
          </!--li-->

            <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li> -->
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('content')
      </main>
    </div>
  </div>
  <script type="text/javascript">
    let maximoBytes = 2000000;
  </script>
  <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript">
    function cerrarSesion() {
      document.querySelector('#form_salir_sesion').submit();
    }
  </script>
</body>

</html>