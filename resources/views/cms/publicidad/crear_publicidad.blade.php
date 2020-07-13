@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				Crear Publicidad
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/publicidades" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
			
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif
		<form action="/cms/guardar/publicidad" id="form" class="row" method="POST" enctype="multipart/form-data">
			@csrf
			<!--div-- class="form-group">
				<h5>Tipo</h5>
				<input type="text" name="publicidad_tipo" placeholder="Tipo..." class="form-control">
			</!--div-->
			<!--div class="form-group">
				<h5>Orden</h5>
				<input type="text" name="publicidad_orden" placeholder="Tipo..." class="form-control">
			</!--div-->
			<div class="form-group col-12">
				<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Enlace de redirección <small class="text-muted">(opcional)</small></h5>
				<input type="text" name="publicidad_url" placeholder="url..." class="form-control" name="">
			</div>
			<div class="form-group col-12">
				<h5>Imagen</h5>
				<input type="file" id="file_input" name="publicidad_imagen">
			</div>
			<input type="hidden" value={{$tipo}} name="publicidad_tipo">
			<div class="col-auto">
				<input type="submit" class="btn btn-success px-5 col-auto" id="submit_button" value="Crear Publicidad">
			</div>
		</form>
	</div>
</section>


@endsection