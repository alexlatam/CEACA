<!doctype html>
<html lang="en">

<head>
  @include('common.head')
  @yield('head')  

</head>
<body>
  <style>
    

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
              <a class="nav-link" href="/perfil">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/perfil/membresia">
                <span data-feather="home"></span>
                Membresias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">
                <span data-feather="home"></span>
                Cursos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/perfil/recursos">
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