@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
<section>
    <div class="container section section-top pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2">
                <img src="{{asset('img/services/principal.jpg')}}" alt="..." class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1">
                <h1 class="mb-4 font-weight-bold">
                    Conoce Nuestros Servicios
                </h1>
                <p class="mb-5 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus odio nesciunt harum neque deserunt deleniti nemo, explicabo id accusamus voluptatum dolor.
                </p>
                <a href="{{route('contacto')}}" class="btn btn-outline-primary">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="mb-4">
    <div class="container section pb-0">
        <div class="row align-items-stretch">
        @php {{$x=0;}} @endphp
            @foreach ($servicios as $servicio)
            @if($x>3)
            @break
            @endif
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <a class="card h-100" href="detalles_servicio/{{$servicio->id}}">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters mb-4">
                            <div class="col-auto">
                                <div class="avatar mr-3">
                                    <img src="{{asset('img/services/' . $servicio->imagen )}}" alt="..." class="img-cover rounded-circle">
                                </div>
                            </div>
                        </div>
                        <h4>
                            {{ $servicio->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                        @php {{ $descripcion = substr($servicio->descripcion,0,100).'...'; }} @endphp
                            {{ $descripcion }}
                        </p>
                    </div>
                </a>
            </div>
            @php {{++$x;}} @endphp
            
            @endforeach
        </div>
    </div>
</section>

@include('home.download_magazine_simple')
@include('home.modal_revista')

<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Categorias
                </h6>
                <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
                    @foreach ($cat_servicios as $categoria)
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        {{ $categoria->name }}
                    </a>
                    @endforeach
                </nav>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($servicios as $servicio)
                <a class="row align-items-center text-nounderline" href="detalles_servicio/{{$servicio->id}}">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/'. $servicio->imagen )}}" alt="{{ $servicio->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $servicio->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                        @php {{ $descripcion = substr($servicio->descripcion,0,350); }} @endphp
                            {{ $descripcion.'...' }}
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('home.publicidad_lateral')

@include('home.servicios_cat')



@endsection