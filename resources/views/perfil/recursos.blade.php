@extends('perfil')


@section('head')
  <title>Dashboard | recursos</title>
@endsection

@section('content')
<div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Recursos de membresia
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach (auth()->user()->plan->resources as $recurso)
                <div class="row align-items-center text-nounderline">
                    <!-- <div class="col-12 col-md-3">
                        <img src="#" alt="{{ $recurso->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div> -->
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $recurso->titulo }}
                        </h4>
                        <a href="{{asset('recursos/' . $recurso->recurso)}}" target="_blank" class="btn btn-sm btn-outline-success mt-2">Ver en linea</a>
                        <a href="/download/recurso/{{$recurso->id}}" class="btn btn-sm btn-success px-5 mt-2">Descargar</a>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>

@endsection