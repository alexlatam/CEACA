@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    .imgMembresias {
        max-width: 100%;
    }
</style>
@endsection
@section('content')
@include('common.navbar')
<!-- HERO
    ================================================== -->
<section class="section section-top" style="padding-top: calc(2.5rem + 5.8125rem);">
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <p class="font-weight-medium text-center text-xs text-uppercase text-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                    Suscríbete al Club
                </p>
                <h1 class="mb-4 text-center" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                    Club Usuarios de Calderas
                    <br>
                    Beneficios y Oportunidades
                </h1>
                <!--p-- class="mb-6 text-center text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Obtén todos los beneficios de pertenecer a nuestra familia.
                </!--p-->
            </div>
        </div>
        <div class="row form-row align-items-center">
            <div class="col-3">
                <div class="img-square">
                    <img src="{{asset('img/club_ceaca/01.jpg')}}" alt="Capacitacion digital" class="img-cover">
                </div>
            </div>
            <div class="col-6">
                <div class="row form-row align-items-end mb-2">
                    <div class="col-7">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/02.jpg')}}" alt="Ingenieria Industrial" class="img-cover">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/03.jpg')}}" alt="Club de aprendizaje online" class="img-cover">
                        </div>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-5">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/04.jpg')}}" alt="Mantenimiento de procesos indutriales" class="img-cover" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/05.jpg')}}" alt="Caldera Indutrial" class="img-cover" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="img-square">
                    <img src="{{asset('img/club_ceaca/06.jpg')}}" alt="revista de calderas industriales" class="img-cover" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.section_magazine_club')
@include('home.modal_revista')

@include('home.capacidades')

<!-- INFO
    ================================================== -->
@php {{ $x=0; }} @endphp
@foreach($membresias as $membresia)
@if($x%2==0)
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 section pb-0 py-md-0">
                <div class="img-half img-half-left">
                    <img src="{{asset('img/membresias/'.$membresia->imagen)}}" alt="{{$membresia->title}}" class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 offset-xl-1 section">
                <h3 class="mb-2">
                    Membresía <span class="text-primary">{{$membresia->title}}</span>
                </h3>
                <p>
                    @php {{echo nl2br($membresia->description);}} @endphp
                </p>
                <a href="/registro/{{strtolower($membresia->title)}}" class="btn btn-outline-primary">
                    Suscribirme
                </a>
            </div>
        </div>
    </div>
</section>
@else
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2">
                <div class="img-half">
                    <img src="{{asset('img/membresias/'.$membresia->imagen)}}" alt="{{$membresia->title}}" class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1 section">
                <h3 class="mb-4">
                    Membresía <span class="text-primary">{{$membresia->title}}</span>
                </h3>
                <p>
                    @php {{echo nl2br($membresia->description);}} @endphp
                </p>
                <a href="/registro/{{strtolower($membresia->title)}}" class="btn btn-outline-primary">
                    Suscribirme
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@php {{ ++$x; }} @endphp
@endforeach
<!-- Notas -->
<section class="container my-5 pb-4">
    <div class="row">
        <div class="col-10">
            <h4><strong>NOTAS</strong> </h4>
            <p>
                -Nota 1 <br>
                Con relación a las consultas:
                <br>
                1.1.Habrá consultas que debido a su nivel de complicación o requerimiento de involucramiento por parte de CEACA, se podrán considerar Servicios Técnicos específicos y no aplicarán a este beneficio de la membresía.
                <br>
                1.2.Las consultas trimestrales No son acumulativas y habrá un límite para repreguntas.
                <br>
                1.3.Las consultas ha de estar relacionadas con los temas a los que se refirieron los cursos en los que participó.
            </p>
        </div>
    </div>
</section>

<!-- estamos trabajando -->
<section class="my-5">
    <img src="{{asset('img/estamos_trabajando.jpg')}}" alt="" width="100%" style="max-height:70vh;">
</section>

<!-- Tablas Adicionales -->
<!--section-- class="container my-5">
    <div class="row justify-content-center">
        <img src="{{asset('img/tabla_1.jpg')}}" alt="" width="80%">
    </div>
</!--section-->
<!--section-- class="container my-5">
    <div class="row justify-content-center">
        <img src="{{asset('img/tabla_2.jpg')}}" alt="" width="80%">
    </div>
</!--section-->


<!-- publicidad -->
<!-- <section class="my-5">
    <a href="{{route('servicios')}}">
        <img src="{{asset('img/publicidad_club.jpg')}}" alt="" width="100%" style="max-height:70vh;">
    </a>
</section> -->
@include('home.publicidad_lateral')


@endsection