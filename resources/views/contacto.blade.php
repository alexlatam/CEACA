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
        <!--p-- class="text-muted mb-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nam voluptatum facilis, atque officiis possimus totam placeat maiores at tempore nulla corporis rem aliquid iusto ab, distinctio, nostrum cumque asperiores!
        </!--p-->
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <h5>
              Dirección
            </h5>
            <p class="text-muted">
              {{$direccion->valor}}
            </p>
            <h5>
              Correo Electrónico
            </h5>
            <p class="text-muted">
              <a href="mailto:admin@domain.com">
                {{$email->valor}}
              </a>
            </p>
          </div>
          <div class="col-md-6 col-lg-5">
            <h5>
              Nuestros Teléfonos
            </h5>
            <p class="text-muted">
              <a href="tel:{{$telefono1->valor}}">
                {{$telefono1->valor}}
              </a>
            </p>
            <p class="text-muted">
              <a href="tel:{{$telefono2->valor}}">
                {{$telefono2->valor}}
              </a>
            </p>
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
            <!--a-- href="{{$twitter->valor}}" class="ml-4 enlace_contact">
              <i class="fab fa-twitter"></i>
              <span class="ml-1">
                Twitter
              </span>
            </!--a-->
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