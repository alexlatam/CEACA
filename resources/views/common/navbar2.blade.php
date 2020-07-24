<style>
  .brandNavbar {
    width: 40%;
  }

  /* Si la pantalla es menor a 1199px se aplicaran los estilos*/
  @media only screen and (min-width: 1200px) {
    .brandNavbar {
      width: 45%;
    }
  }

  /* Si la pantalla es menor a 1199px se aplicaran los estilos*/
  @media only screen and (max-width: 1199px) {
    .brandNavbar {
      width: 25%;
    }
  }

  @media only screen and (max-width: 700px) {
    .brandNavbar {
      width: 32%;
    }
  }
</style>
<script>
  function clickNavabar() {
    var navbar = document.getElementById("navbarPage")
    var menuCollapse = document.getElementById("navbarCollapse")
    navbar.classList.add('bg-light')
    if (menuCollapse.classList.contains('show')) {
      //se deberia quitar el bg-white, porq estara al inicio de la pagina
      navbar.classList.remove('bg-light')
    } else {
      //se deberia agregar el bg-white, porq ya se habra dado suficinete scroll
      navbar.classList.add('bg-light')
    }
  }
</script>
<nav class="navbar navbar-expand-xl navbar-type fixed-top py-0" id="navbarPage">
  <div class="container">
    <a class="navbar-brand" style="width:75%;" href="{{route('home')}}">
      <img src="{{asset('img/logo.png')}}" alt="" class="brandNavbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" onclick="clickNavabar()">
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
        @foreach ($info as $inf)
        @if ($inf->atributo == "facebook")
        <li class="nav-item">
          <a href="{{ $inf->valor }}" class="nav-link" target="_blank">
            <i class="fab fa-facebook"></i>
            <span class="d-xl-none ml-2">
              Facebook
            </span>
          </a>
        </li>
        @elseif ($inf->atributo == "instagram")
        <li class="nav-item">
          <a href="{{$inf->valor}}" class="nav-link" target="_blank">
            <i class="fab fa-instagram"></i>
            <span class="d-xl-none ml-2">
              Instagram
            </span>
          </a>
        </li>
        @elseif ($inf->atributo == "linkedin")
        <li class="nav-item">
          <a href="{{$inf->valor}}" class="nav-link" target="_blank">
            <i class="fab fa-linkedin"></i>
            <span class="d-xl-none ml-2">
              Linkedin
            </span>
          </a>
        </li>
        @endif
        @endforeach
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">
            Inicio
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('nosotros')}}" class="nav-link" style="min-width:145px;">
            Quienes Somos
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('servicios')}}" class="nav-link">
            Servicios
          </a>
        </li>
        <!--li-- class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
          </a>
          <!--div-- class="dropdown-menu" aria-labelledby="navbarWelcome">
            
          </!--div-->
        <!--/--li-->
        <!--li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Capacitación
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarLandings">
            <a class="dropdown-item" href="">
            Categoria 1
            </a>
            <a class="dropdown-item" href="">
            Categoria 2
            </a>
            <a class="dropdown-item" href="">
            Categoria 3
            </a>
            <a class="dropdown-item" href="">
            Categoria 4
            </a>
          </div>
        </!--li-->
        <li class="nav-item">
          <a href="{{route('revistas')}}" class="nav-link">
            Revistas
          </a>
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
        <!--li-- class="nav-item">
          <a href="{{route('capacitacion')}}" class="nav-link">
            Capacitaciones
          </a>
        </!--li-->
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
        <li class="nav-item sesion-container">
          <a href="#" id="sesion_icon" class="nav-link">
            <img id="sesion_img" src="{{asset('images/sesion_icon.svg')}}">
          </a>
          <div id="sesion_card" class="sesion-card">
            @guest
              <a href="/sesion">Iniciar sesión</a>
              <a href="/registro">Registrarse</a>
            @else
              <a href="/perfil">Ir al perfil</a>
              <form method="POST" id="form_logout" action="/logout">
                @csrf
                <a href="#" id="submit_logout">Cerrar Sesion</a>
              </form>
            @endguest
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript">

  let logout_form = document.getElementById('form_logout');

  let logout_button_navbar = document.getElementById('submit_logout');
  

  if(logout_button_navbar)
  {
    logout_button_navbar.addEventListener('click', (e) => {
      logout_form.submit();
    });
  }


  document.addEventListener('click', (e) => {
    let sesion_card = document.getElementById('sesion_card');

    if(e.target.id == 'sesion_icon' || e.target.id == 'sesion_img')
    {
      
      e.preventDefault();
      sesion_card.classList.toggle('active')
      
    }

    if(e.target.id != 'sesion_icon' && e.target.id != 'sesion_img')
    {
      sesion_card.classList.remove('active')
    }
  });  
</script>