@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<div class="row align-items-center">
			<h2 class="my-3">
				Crear Imagen Slider
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/slider/image" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
			
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif
		<form action="/cms/guardar/slider/image" class="row" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-12">
				<h5>Titulo <span class="text-muted">(opcional)</span></h5>
				<input type="text" name="slider_titulo" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group col-12">
				<h5 title="Pequeña descripción que se mostrara en el Banner">Descripción <span class="text-muted">(opcional)</span></h5>
				<textarea class="form-control" name="slider_descripcion"></textarea>
			</div>
			<!--div-- class="form-group col-12">
			<h5 title="Al darle click sera redirigido a este enlace">Url de redirección <span class="text-muted">(opcional)</span></h5>
				<input type="text" name="slider_url" placeholder="Url..." class="form-control">
			</!--div-->
			<!--div-- class="form-group col-12">
				<h5>Orden</h5>
				<input type="text" name="slider_orden" placeholder="Orden..." class="form-control" required>
			</!--div-->
			<div class="form-group col-12">
				<h5>Imagen</h5>
				<input type="file" name="slider_imagen" required>
			</div>
			<div class="col-auto">
				<input type="submit" class="btn btn-success px-5 mt-4" value="Crear Slider">
			</div>

		</form>
	</div>
</section>


@endsection