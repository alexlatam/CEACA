@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    #navbarPage {
        background-color: #fff !important;
    }

    .section_header {
        height: 100vh;
        margin-top: 6% !important;
    }

    .bg-overlay:before {
        background-color: #212529;
        opacity: 0.4 !important;
    }

    .bg-overlay {
        margin-top: 6%;
    }

    @media only screen and (min-width: 1400px) {
        #subtitle_header {
            font-size: 2rem;
            padding-top: 2rem;
        }
        #title_header {
            font-size: 3rem;
        }
    }
    @media only screen and (max-width: 600px) {
        #subtitle_header {
            font-size: 1rem;
        }
        #title_header {
            font-size: 2rem;
        }
    }
</style>
@endsection
@section('content')
@include('common.navbar')
<section class="fp-section section_header">
    <div class="section section-top section_header">

        <!-- Cover -->
        <div class="bg-cover section_header" style="background-image: url({{asset('img/header_nosotros.jpg')}});"></div>

        <div class="bg-overlay section_header"></div>

        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-10">
                    <p class="font-weight-medium text-center text-uppercase text-white text-white" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load" id="subtitle_header">
                        CEACA - Combustión, Energía & Ambiente, s. a.
                    </p>
                    <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load" id="title_header">
                        23 años sirviendo con calidad y compromiso, en temas de Consultoría, Servicio Técnico y Capacitación en toda Latinoamérica
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.publicidad_lateral')

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
<section class="section bg-light">
  <div class="line line-top"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
</section>
@include('home.modal_revista')

@include('home.servicios_cat')

@include('home.capacidades')

@endsection