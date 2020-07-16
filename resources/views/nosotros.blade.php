@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
@include('common.navbar')

<section class="fp-section" style="height:100vh;">
    <div class="section section-top">
        <div class="bg-cover" style="background-image: url({{asset('img/header_nosotros.jpg')}});"></div>

        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-7">
                    <p class="font-weight-medium text-center text-xs text-uppercase text-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                        <br>
                        Ceaca - Combustion, Energia & Ambiente
                    </p>
                    <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                        23 años sirviendo con calidad y compromiso, en temas de Consultoría, Servicio Técnico y Capacitación en toda Latinoamérica
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0 mt-5 pt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/publicidad_nosotros.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="fp-section border-bottom">
    <div class="section section-top" style="padding-top: calc(2.5rem + 5.8125rem);">
        @php {{ $x=0; }} @endphp
        @foreach($nosotros_array as $nosotros)
        @if($nosotros->seccion == 'nosotros')
        @if($x%2==0)
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="img-effect img-effect-solid mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('img/nosotros/'. $nosotros->imagen )}}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <h2>
                    @php {{echo nl2br($nosotros->atributo);}} @endphp                         
                    </h2>
                    <h2 class="mb-4 text-muted">
                    @php {{ echo nl2br($nosotros->valor2);}} @endphp 
                    </h2>
                    <p class="text-muted">
                    @php {{ echo nl2br($nosotros->valor);}} @endphp 
                    </p>
                </div>
            </div>
        </div>
        @else
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <h2>
                    @php {{echo nl2br($nosotros->atributo);}} @endphp   
                    </h2>
                    <h2 class="mb-4 text-muted">
                    @php {{ echo nl2br($nosotros->valor2);}} @endphp 
                    </h2>
                    <p class="text-muted">
                    @php {{ echo nl2br($nosotros->valor);}} @endphp 
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="img-effect img-effect-solid mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('img/nosotros/'. $nosotros->imagen )}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif
        @php {{ ++$x; }} @endphp
        @endforeach
    </div>
</section>

@include('home.section_magazine')
@include('home.modal_revista')

@include('home.servicios_cat')

@include('home.publicidad_lateral')

@include('home.capacidades')

@endsection