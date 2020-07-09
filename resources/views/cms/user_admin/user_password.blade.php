@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		<h2 class="my-3">Cambiar contraseña del usuario: {{$user->email}}</h2>
		@if(session('message'))
		  <div class="alert alert-danger" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/actualizar/password/usuario" method="POST">
			<input type="hidden" value="{{$user->id}}" name="user_id">
			@csrf
			<div class="row col-md-6">
				<div class="col-12 mb-4">
					<label>Nueva Contraseña</label>
					<input class="form-control"  type="password" name="password" value="" placeholder="contraseña">
				</div>
				<div class="col-12 mb-4">
					<label>Comprobar Contraseña</label>
					<input class="form-control"  type="password" name="password_verify" value="" placeholder="contraseña">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" class="btn btn-success px-5" value="Actualizar Contraseña">
				</div>
			</div>
		</form>
	</div>
</section>
@endsection