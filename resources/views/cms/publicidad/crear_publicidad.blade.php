@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Publicidad
		</h2>
		<hr>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/publicidad" class="row" method="POST" enctype="multipart/form-data">
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
				<input type="file" name="publicidad_imagen">
			</div>
			<input type="hidden" value={{$tipo}} name="publicidad_tipo">
			<input type="submit" class="btn btn-primary px-5 col-auto" value="Crear Publicidad">
		</form>
	</div>
</section>


@endsection