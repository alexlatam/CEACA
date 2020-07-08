@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Imagen Slider
		</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/slider/image" class="row" id="form" method="POST" enctype="multipart/form-data">
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
				<input type="file" name="slider_imagen" id="file_input" required>
			</div>
			<input type="submit" class="btn btn-primary px-5 col-auto" id="submit_button" value="Crear Slider">
		</form>
	</div>
</section>
@endsection