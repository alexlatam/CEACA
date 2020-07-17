@extends('perfil')


@section('head')
  <title>Dashboard</title>
@endsection

@section('content')
  <h2 class="pt-3">Bienvenido a tu perfil {{auth()->user()->name}}</h2>
  <hr>

  <h4>aloja</h4>

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif

  @if(session('message'))
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  <div class="table-responsive">

  </div>

@endsection