@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		<h2 class="my-3">Crear Usuarios Administrativos</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/usuario" method="POST">
			@csrf
			<div class="row col-md-6">
				<div class="col-12 mb-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="name" value="" placeholder="Nombre">
				</div>
				<div class="col-12 mb-4">
					<label>Email</label>
					<input class="form-control"  type="text" name="email" value="" placeholder="Email">
				</div>
				<div class="col-12 mb-4">
					<label>Contraseña</label>
					<input class="form-control"  type="password" name="password" value="" placeholder="contraseña">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" class="btn btn-primary" value="Crear Usuario">
				</div>
			</div>
		</form>
	</div>

	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Nombre</th>
	        <th>Email</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($usuarios as $usuario)
	        <tr>
	          <td>{{$usuario->id}}</td>
	          <td>{{$usuario->name}}</td>
	          <td>{{$usuario->email}}</td>
	          <td class="d-flex">
	            <a href="/cms/password/usuario/{{$usuario->id}}"class="btn btn-sm btn-outline-secondary mr-2 editar">Cambiar contraseña</a>
	            <form action="" method="POST">
	              @csrf
	              <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-secondary">
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
</section>




@endsection