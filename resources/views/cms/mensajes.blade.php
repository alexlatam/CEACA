@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Mensajes de contacto</h4>
</div>
<hr>

  
</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Nombre</th>
	        <th>Correo</th>
	        <th>Mensaje</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($mensajes as $mensaje)
	        <tr>
	          <td>{{$mensaje->id}}</td>
	          <td>{{$mensaje->name}}</td>
	          <td>{{$mensaje->email}}</td>
              <td>{{$mensaje->message}}</td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>

@endsection