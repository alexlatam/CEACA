@extends('layouts.main')

@section('head')
<title>Ceaca - Contacto</title>
<style>
.enlace_contact:hover{
  text-decoration: none;
}
</style>
@endsection
@section('content')


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
        <form action="" method="">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nombre Completo</label>
              <div class="input-group">
                <input type="text" class="form-control order-1" name="contact-name">
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
                <input type="email" class="form-control order-1" name="contact-email">
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
              <textarea class="form-control" name="contact-message" rows="7"></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-12">
              <button type="submit" class="btn btn-outline-primary">
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
            <a href="{{$facebook->valor}}" class="enlace_contact">
              <i class="fab fa-facebook"></i>
              <span class="ml-1">
                Facebook
              </span>
            </a>
            <a href="{{$instagram->valor}}" class="ml-4 enlace_contact">
              <i class="fab fa-instagram"></i>
              <span class="ml-1">
                Instagram
              </span>
            </a>
            <a href="{{$linkedin->valor}}" class="ml-4 enlace_contact">
              <i class="fab fa-linkedin"></i>
              <span class="ml-1">
                Linkedin
              </span>
            </a>
            <a href="{{$twitter->valor}}" class="ml-4 enlace_contact">
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

@endsection