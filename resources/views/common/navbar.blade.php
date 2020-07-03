<style>
  .brandNavbar {
    width: 50%;
  }

  /* Si la pantalla es menor a 992px se aplicaran los estilos*/
  @media only screen and (max-width: 1199px) {
    .brandNavbar {
      width: 27%;
    }
  }
  /* Si la pantalla es menor a 992px se aplicaran los estilos*/
  @media only screen and (max-width: 900px) {
    .brandNavbar {
      width: 40%;
    }
  }
</style>
<nav class="navbar navbar-expand-xl navbar-type fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('index')}}">
      <img src="{{asset('img/logo.png')}}" alt="" class="brandNavbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="35">
        <path d="M0 0h24v24H0z" fill="none" />
        <path d="M3 15h18v-2H3v2zm0 4h18v-2H3v2zm0-8h18V9H3v2zm0-6v2h18V5H3z" /></svg>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-facebook"></i>
            <span class="d-xl-none ml-2">
              Facebook
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-twitter"></i>
            <span class="d-xl-none ml-2">
              Twitter
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-instagram"></i>
            <span class="d-xl-none ml-2">
              Instagram
            </span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{route('index')}}" class="nav-link">
            Inicio
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('nosotros')}}" class="nav-link" style="min-width:145px;">
            Quienes Somos
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarWelcome">
            <a class="dropdown-item" href="{{route('servicios')}}">
              Servicios Generales
            </a>
            <a class="dropdown-item" href="">
              Categoria 1
            </a>
            <a class="dropdown-item" href="">
              Categoria 2
            </a>
            <a class="dropdown-item" href="">
              Categoria 3
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Capacitación
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarLandings">
            <a class="dropdown-item @@if ( page == 'app.html' ) { active }" href="app.html">
              App
            </a>
            <a class="dropdown-item @@if ( page == 'company.html' ) { active }" href="company.html">
              Company
            </a>
            <a class="dropdown-item @@if ( page == 'fullpage.html' ) { active }" href="fullpage.html">
              Fullpage
            </a>
            <a class="dropdown-item @@if ( page == 'product.html' ) { active }" href="product.html">
              Product
            </a>
            <a class="dropdown-item @@if ( page == 'real-estate.html' ) { active }" href="real-estate.html">
              Real estate
            </a>
            <a class="dropdown-item @@if ( page == 'restaurant.html' ) { active }" href="restaurant.html">
              Restaurant
            </a>
            <a class="dropdown-item @@if ( page == 'service.html' ) { active }" href="service.html">
              Service
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{route('club')}}" class="nav-link" style="min-width:115px;">
            Club Ceaca
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('contacto')}}" class="nav-link">
            Contáctanos
          </a>
        </li>
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
      </ul>
    </div>
  </div>
</nav>