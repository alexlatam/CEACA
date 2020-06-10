@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		<h2 class="my-3">Crear Usuario</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/usuario" method="POST">
			@csrf
			<div class="row">
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
					<input type="submit" class="btn btn-primary" name="">
				</div>
			</div>
			
		</form>
	</div>
</section>


@endsection