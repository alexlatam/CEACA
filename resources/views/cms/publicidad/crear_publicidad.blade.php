@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Publicidad
		</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/publicidad" class="col-md-6" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<h5>Tipo</h5>
				<input type="text" name="publicidad_tipo" placeholder="Tipo..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Orden</h5>
				<input type="text" name="publicidad_orden" placeholder="Tipo..." class="form-control">
			</div>
			<div class="form-group">
				<h5>URL</h5>
				<input type="text" name="publicidad_url" placeholder="url..." class="form-control" name="">
			</div>
			<div class="form-group">
				<h5>Imagen</h5>
				<input type="file" name="publicidad_imagen">
			</div>
			<input type="hidden" value={{$tipo}} name="publicidad_tipo">
			<input type="submit" class="btn btn-primary " value="Crear Publicidad">
		</form>
	</div>
</section>


@endsection