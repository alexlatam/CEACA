@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">Crear Publicidad</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/publicidad" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<h5>Titulo</h5>
				<input type="text" name="publicidad_titulo" placeholder="Titulo..." class="form-control" name="">
			</div>
			<div class="form-group">
				<h5>descripción</h5>
				<input type="text" name="publicidad_descripcion" placeholder="Descripcion..." class="form-control" name="">
			</div>
			<div class="form-group">
				<h5>Imagen</h5>
				<input type="file" name="publicidad_imagen">
			</div>
			<div class="form-group">
				<h5>Tipo</h5>
				<select name="publicidad_tipo" class="form-control form-control">
				  <option>Seleccionar Tipo de publicidad</option>
				  <option value="1">Principal</option>
				  <option value="2">Secundaria</option>
				</select>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" value="Guardar" name="">
		</form>
	</div>
</section>


@endsection