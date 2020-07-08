@extends('cms')


@section('content')
	<h2 class="pt-3">Bienvenido {{auth()->user()->name}}</h2>
	<hr>

	<h4>Panel administrativo del sitio web <a href="https://ceaca.com/" target="_blank">Ceaca.com</a></h4>

	@if(session('error'))
	      <div class="alert alert-danger my-3" role="alert">
	        {{session('error')}}
	      </div>
	@endif

	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Titulo</th>
	        <th>Tiempo</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($revistas as $revista)
	        <tr>
	          <td>{{$revista->id}}</td>
	          <td>{{$revista->titulo}}</td>
	          <td>{{$revista->created_at->diffForHumans()}}</td>
	          <td class="d-flex ">
	            <button type="button" id="{{ $revista->id }}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalCategoriaEditar">Editar</button>
	            <form action="/cms/revista/eliminar/{{$revista->id}}" method="POST">
	              @csrf
	              <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-success">
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
@endsection