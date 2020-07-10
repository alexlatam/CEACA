@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				Crear Sección
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/nosotros" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif
		<form action="/cms/guardar/nosotros" class="row" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-12">
				<h5>Titulo de la sección</h5>
				<input type="text" name="nosotros_title" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group col-12">
				<h5>Subtitulo de la sección</h5>
				<input type="text" name="nosotros_subtitle" placeholder="SubTitulo..." class="form-control">
			</div>
			<div class="form-group col-12">
				<h5>Contenido</h5>
				<textarea class="form-control" name="nosotros_atributo"></textarea>
			</div>
			<div class="form-group col-12">
				<h5>Imagen</h5>
				<input type="file" name="nosotros_imagen">
			</div>
			<div class="col-auto mt-3">
				<input type="submit" class="btn btn-success px-5 col-auto" value="Crear sección">
			</div>
		</form>
	</div>
</section>


@endsection