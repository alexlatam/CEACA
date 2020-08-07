@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    .img_principal_section{
        width: 100%!important;
        height: auto;
    }

    @media (max-width: 768px){
        .capacitacion_message{
            padding: 0 1rem;
        }
    }
</style>
@endsection
@section('content')
@include('common.navbar')

<section class="mb-3">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-7" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                @if(isset($encabezado))
                <img src="{{asset('img/encabezados/'. $encabezado->imagen)}}" alt="{{$encabezado->titulo}}" class="img-fluid mb-5 mb-md-0 img_principal_section">
                @endif
            </div>
            <div class="col-12 col-md-5">
                <h1 class="mb-1 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    @if(isset($encabezado))
                    {{$encabezado->titulo}}
                    @endif
                </h1>
                <p class="mb-3">
                    @if(isset($encabezado))
                    @php {{ echo ($encabezado->descripcion); }} @endphp
                    @endif
                </p>
            </div>
        </div>
        <div class="row justify-content-center capacitacion_message text-success mt-4">
            <strong>Todos los cursos están disponibles bajo la modalidad presencial, distancia y modalidad mixta. Abiertos e In-company.</strong>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Categorias
                </h6>
                <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
                    @foreach ($cat_servicios as $categoria)
                    <a class="text-uppercase text-xs mb-2" href="/capacitacion?categoria={{$categoria->id}}">
                        {{ $categoria->name }}
                    </a>
                    @endforeach
                </nav>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($capacitaciones as $capacitacion)
                <div class="row align-items-center">
                    <div class="col-12 col-md-7 px-md-0">
                        <img src="{{asset('/capacitaciones/'. $capacitacion->imagen )}}" alt="{{ $capacitacion->titulo }}" class="img-fluid mb-3 mb-md-0" width="100%">
                    </div>
                    <div class="col-12 col-md-5">
                        <a href="detalles_capacitacion/{{$capacitacion->id}}">
                            <h4>
                                {{ $capacitacion->titulo }}
                            </h4>
                        </a>
                        <a class="btn btn-outline-success px-5 mt-4" href="detalles_capacitacion/{{$capacitacion->id}}">Ver más</a>
                    </div>
                    <div class="col-12">
                        <hr class="my-5">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@if(isset($encabezado))
@if(stripos($categoria_name, 'CEACA'))
<section class="container my-4">
    <div class="row">
        <p>
            <strong class="text-success">CURSOS ADAPTADOS A SUS INSTALACIONES, PROCESOS Y NECESIDADES</strong>
            En función de las necesidades específicas del solicitante – si el curso se requiere bajo la modalidad de In-Company (presencial o a distancia), se presentará el requerimiento de información de sus calderas, para adaptar el curso a los requerimientos particulares: fallas de equipos, casos de planta.
            <br><br>
            <strong class="text-success">SERVICIOS TÉCNICOS O DE ACOMPAÑAMIENTO </strong>
            <br>
            Prácticamente en todas las áreas citadas como temas de cursos, se está en capacidad de brindar servicio técnico por parte del especialista – instructor, a ofrecer en caso de ser requerido, bajo la figura que llamamos Programas de Acompañamiento para el Mejoramiento Continuo.
            <br><br>
            <span class="text-success">Para el caso particular de Mejoramiento continuo de calderas, se podrían llevar Programas de Acompañamiento para el aumento de Confiabilidad y Eficiencia de Calderas”</span>
            <br><br>
            <strong class="text-success">“SERVICIO DE ACOMPAÑAMIENTO EN DEFINICIÓN DE UN PLAN DE PRIORIDADES DE MANTENIMIENTO DE CALDERA”</strong>
            <br><br>
            <strong class="text-success">“PROGRAMA DE ACOMPAÑAMIENTO PARA EL MEJORAMIENTO CONTINUO DE LA CONFIABILIDAD EN GENERACIÓN DE VAPOR”</strong>
        </p>
    </div>
</section>
@endif
@endif


@include('home.download_magazine_simple')
@include('home.modal_revista')
<!-- Publicidad -->
@include('home.publicidad_lateral')

@include('home.servicios_cat')

@endsection