<!doctype html>
<html lang="en">

<head>
  @include('common.head')
  @yield('head')  

</head>
<body>
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

    .perfil-main{
      padding-top: 5rem;
    }

  </style>
  @include('common.navbar')
  <div class="container-fluid perfil-main">
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
              <a class="nav-link" href="/cms">
                <span data-feather="home"></span>
                Membresias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms">
                <span data-feather="home"></span>
                Cursos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cms">
                <span data-feather="home"></span>
                Recursos
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('content')
      </main>
    </div>
  </div>
  
  <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>