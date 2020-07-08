@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Sección
		</h2>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif
		<form action="/cms/guardar/nosotros" class="row" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-12">
				<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Titulo Sección</h5>
				<input type="text" name="nosotros_title" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group col-12">
				<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Subtitulo Sección</h5>
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
			<input type="submit" class="btn btn-primary px-5 col-auto" value="Crear sección">
		</form>
	</div>
</section>


@endsection