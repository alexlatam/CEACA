@extends('layouts.main')

@section('head')
<title>Ceaca - Contacto</title>
<style>
  .enlace_contact:hover {
    text-decoration: none;
  }
</style>
<script src="https://www.google.com/recaptcha/api.js"></script>

@endsection
@section('content')
@include('common.navbar')

<!-- BREADCRUMB
    ================================================== -->
<nav class="breadcrumb">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h5 class="breadcrumb-heading">
          Contacto
        </h5>
      </div>
      <div class="col-auto">
        <span class="breadcrumb-item">
          <a href="{{route('home')}}">Inicio</a>
        </span>
        <span class="breadcrumb-item active">
          Contacto
        </span>
      </div>
    </div>
  </div>
</nav>
@if(session('message'))
<div class="alert alert-success my-4" role="alert">
  <strong>{{session('message')}}</strong>
</div>
@endif
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/contacto.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

<!-- FORM
    ================================================== -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h6 class="title">
          Formulario de contacto e información
        </h6>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4">
          ¿Tienes alguna pregunta? Escríbenos un <span class="text-primary">mensaje</span>
        </h3>
        <form id="form-contacto" action="/enviar/mensaje" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nombre Completo</label>
              <div class="input-group">
                <input id="name" type="text" class="form-control order-1" name="name" required>
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                    <svg class="input-group-icon icon-offset icon icon-person" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path transform="translate(3 3)" d="
                            M0 100 A 50 50 0 0 1 50 60 A 20 20 0 0 1 50 0 A 20 20 0 0 1 50 60 A 50 50 0 0 1 100 100">
                      </path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label>Correo Electrónico</label>
              <div class="input-group">
                <input id="email" type="email" class="form-control order-1" name="email" required>
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                    <svg class="input-group-icon icon-offset icon icon-envelope" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path transform="translate(3 3)" d="
                            M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                      </path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
              <label>Comentario</label>
              <textarea id="message" class="form-control" name="message" required rows="7"></textarea>
            </div>
          </div>
          <input type="hidden" name="action" value="validate_captcha">
          <div class="form-row">
          <div class="col-12">

              <button   class="btn btn-outline-primary g-recaptcha" 
              data-sitekey="6LcnwLIZAAAAAKQiVWCAHH72PWf2-Dg-69YaV41e" 
              data-callback='onSubmit' 
              data-action='submit'>
              Enviar Mensaje
            </button>
              <button type="reset" class="btn btn-link">
                Vaciar Formulario
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- OFFICES
    ================================================== -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h6 class="title">
          Datos de Contacto
        </h6>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4">
          Puedes escribirnos <span class="text-primary">directamente</span>
        </h3>
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <h5>
              Dirección
            </h5>
            <p class="text-muted">
              @php {{ echo nl2br($direccion->valor); }} @endphp
            </p>
            <h5>
              Correo Electrónico
            </h5>
            <p class="text-muted">
              @php {{ echo nl2br($email->valor); }} @endphp
            </p>
          </div>
          <div class="col-md-6 col-lg-5">
            <h5>
              Nuestros Teléfonos
            </h5>
            <div class="row align-items-center ml-1 mb-2">
              <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px">
                <g>
                  <path d="M500.4,241.8c-0.6,63.4-16.9,113-50.8,156.1c-36.4,46.3-83.8,75.7-141.8,87.6   c-44.8,9.1-88.4,5.1-131.2-10.4c-9.5-3.5-18.8-7.6-27.7-12.5c-2.7-1.5-5-1.7-8-0.7c-40.5,13.1-81.1,26.1-121.7,39   c-1.8,0.6-4.2,2.3-5.6,1c-1.6-1.6,0.4-4,1-5.9c8.1-24.1,16.2-48.3,24.4-72.4c5-14.7,9.8-29.3,15-43.9c1.4-3.8,0.9-6.7-1.2-10.2   c-10.3-17.6-17.9-36.4-23.3-56.1c-10.1-37-11.2-74.4-3.3-111.8c8.6-40.8,26.6-77.2,54.3-108.6c33.5-38,74.8-63.1,123.9-75.2   c31.3-7.7,62.9-8.9,94.7-3.7c41.6,6.8,79.1,23.3,111.8,49.9c34,27.7,58.8,62.1,74.4,103.4C493.9,189.7,500.7,226.2,500.4,241.8z    M74.6,441.5c24.8-8,48.5-15.6,72-23.3c3.1-1,5.6-0.8,8.3,1c9,6,18.7,10.8,28.7,15c32.5,13.8,66.3,18.8,101.2,14.3   c42.8-5.5,80.4-22.7,112-52.6c39.8-37.7,61.1-83.9,63-138.5c1.8-53.5-15.4-100.5-51.3-140.4c-34.1-37.9-76.9-59.5-127.4-64.9   c-43.9-4.7-85,4.8-123,27.6c-32.5,19.6-57.4,46.3-74.7,80c-19.1,37.1-25.6,76.5-20.1,117.8c4.1,31.2,15.3,59.9,33.3,85.7   c2,2.9,2.6,5.3,1.4,8.7c-3.7,10.2-7,20.5-10.5,30.7C83.3,415.2,79.2,427.8,74.6,441.5z" fill="#51C85D" />
                  <path d="M141,194.7c0.5-23.8,8.9-41.5,24.8-55.6c5.1-4.6,11.4-6.6,18.5-5.6c3,0.4,6,0.7,9,0.5   c5.6-0.3,9.4,2.4,11.3,7.3c6.7,17.4,13.2,34.8,19.7,52.3c2.2,6-1.6,10.7-4.8,15c-3.7,5.1-8.2,9.6-12.6,14.1   c-4.5,4.6-5.1,7.2-2,12.8c18.1,32.9,43.5,58.2,78,73.8c1.2,0.5,2.4,1.2,3.6,1.8c4.6,2.1,8.7,1.6,12.2-2.4   c6.4-7.5,13.4-14.4,19.3-22.3c3.9-5.2,6.6-6.1,12.5-3.5c17.6,7.6,34.1,17.2,50.9,26.5c3.1,1.7,4.2,4.3,4.1,7.9   c-0.9,29.5-17.8,44.9-47.5,51.7c-14.4,3.3-27.7-0.3-40.9-5.1c-27.7-10-54.4-21.8-76.8-41.6c-17.8-15.8-33.5-33.4-46.8-53.1   c-10.2-15.2-20.8-30.1-26.7-47.8C143.4,212,140.9,202.4,141,194.7z" fill="#51C85D" />
                </g>
              </svg>
              <a href="tel:{{$telefono1->valor}}" class="ml-2">
                <a href="tel:{{$telefono1->valor}}">
                  {{$telefono1->valor}}
                </a>
            </div>
            <div class="row align-items-center ml-1">
              <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px">
                <g>
                  <path d="M500.4,241.8c-0.6,63.4-16.9,113-50.8,156.1c-36.4,46.3-83.8,75.7-141.8,87.6   c-44.8,9.1-88.4,5.1-131.2-10.4c-9.5-3.5-18.8-7.6-27.7-12.5c-2.7-1.5-5-1.7-8-0.7c-40.5,13.1-81.1,26.1-121.7,39   c-1.8,0.6-4.2,2.3-5.6,1c-1.6-1.6,0.4-4,1-5.9c8.1-24.1,16.2-48.3,24.4-72.4c5-14.7,9.8-29.3,15-43.9c1.4-3.8,0.9-6.7-1.2-10.2   c-10.3-17.6-17.9-36.4-23.3-56.1c-10.1-37-11.2-74.4-3.3-111.8c8.6-40.8,26.6-77.2,54.3-108.6c33.5-38,74.8-63.1,123.9-75.2   c31.3-7.7,62.9-8.9,94.7-3.7c41.6,6.8,79.1,23.3,111.8,49.9c34,27.7,58.8,62.1,74.4,103.4C493.9,189.7,500.7,226.2,500.4,241.8z    M74.6,441.5c24.8-8,48.5-15.6,72-23.3c3.1-1,5.6-0.8,8.3,1c9,6,18.7,10.8,28.7,15c32.5,13.8,66.3,18.8,101.2,14.3   c42.8-5.5,80.4-22.7,112-52.6c39.8-37.7,61.1-83.9,63-138.5c1.8-53.5-15.4-100.5-51.3-140.4c-34.1-37.9-76.9-59.5-127.4-64.9   c-43.9-4.7-85,4.8-123,27.6c-32.5,19.6-57.4,46.3-74.7,80c-19.1,37.1-25.6,76.5-20.1,117.8c4.1,31.2,15.3,59.9,33.3,85.7   c2,2.9,2.6,5.3,1.4,8.7c-3.7,10.2-7,20.5-10.5,30.7C83.3,415.2,79.2,427.8,74.6,441.5z" fill="#51C85D" />
                  <path d="M141,194.7c0.5-23.8,8.9-41.5,24.8-55.6c5.1-4.6,11.4-6.6,18.5-5.6c3,0.4,6,0.7,9,0.5   c5.6-0.3,9.4,2.4,11.3,7.3c6.7,17.4,13.2,34.8,19.7,52.3c2.2,6-1.6,10.7-4.8,15c-3.7,5.1-8.2,9.6-12.6,14.1   c-4.5,4.6-5.1,7.2-2,12.8c18.1,32.9,43.5,58.2,78,73.8c1.2,0.5,2.4,1.2,3.6,1.8c4.6,2.1,8.7,1.6,12.2-2.4   c6.4-7.5,13.4-14.4,19.3-22.3c3.9-5.2,6.6-6.1,12.5-3.5c17.6,7.6,34.1,17.2,50.9,26.5c3.1,1.7,4.2,4.3,4.1,7.9   c-0.9,29.5-17.8,44.9-47.5,51.7c-14.4,3.3-27.7-0.3-40.9-5.1c-27.7-10-54.4-21.8-76.8-41.6c-17.8-15.8-33.5-33.4-46.8-53.1   c-10.2-15.2-20.8-30.1-26.7-47.8C143.4,212,140.9,202.4,141,194.7z" fill="#51C85D" />
                </g>
              </svg>
              <a href="tel:{{$telefono2->valor}}" class="ml-2">
                {{$telefono2->valor}}
              </a>
            </div>
          </div>
          <div class="col-12">
            <h5>
              Nuestras Redes Sociales
            </h5>
            <a href="{{$facebook->valor}}" class="enlace_contact" target="_blank">
              <i class="fab fa-facebook"></i>
              <span class="ml-1">
                Facebook
              </span>
            </a>
            <a href="{{$instagram->valor}}" class="ml-4 enlace_contact" target="_blank">
              <i class="fab fa-instagram"></i>
              <span class="ml-1">
                Instagram
              </span>
            </a>
            <a href="{{$linkedin->valor}}" class="ml-4 enlace_contact" target="_blank">
              <i class="fab fa-linkedin"></i>
              <span class="ml-1">
                Linkedin
              </span>
            </a>
            <a href="{{$twitter->valor}}" class="ml-4 enlace_contact" target="_blank">
              <i class="fab fa-twitter"></i>
              <span class="ml-1">
                Twitter
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pb-0 my-5 py-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/1.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

<script>
  function onSubmit(token) {
    if(document.getElementById("form-contacto").checkValidity()){
      document.getElementById("form-contacto").submit();
    }else{
      $error= "¡Complete los campos de manera correcta!\n";

      if(!document.getElementById("name").checkValidity()){
       $error = $error+"- Ingrese un nombre.\n";
      }

      if(!document.getElementById("email").checkValidity()){
         $error = $error+"- Ingrese un correo valido.\n";
      }
      if(!document.getElementById("message").checkValidity()){
         $error = $error+"- Ingrese un comentario.\n";

      }
      alert($error);
    }

  }
</script>
@endsection