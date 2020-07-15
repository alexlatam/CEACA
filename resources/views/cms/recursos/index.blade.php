@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Recursos</h4>
  <a href="/cms/crear/recurso" class="btn btn-sm btn-outline-success col-auto ml-auto">Agregar recurso</a>
</div>
<hr>
  @if(session('message'))
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  
</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
          <th>Titulo</th>
	        <th>Descripcion</th>
	        <th>precio</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($recursos as $recurso)
	    		<td>{{$recurso->id}}</td>
	    		<td>{{$recurso->titulo}}</td>
	    		<td>{{$recurso->descripcion}}</td>
	    		<td>{{$recurso->precio}}</td>
	    		<td>editar</td>
	    	@endforeach
	    </tbody>
	  </table>



@endsection