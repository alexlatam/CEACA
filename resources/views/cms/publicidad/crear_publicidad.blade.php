@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">Crear Publicidad</h2>
		<form>
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
				<input type="text" name="publicidad_imagen" placeholder="Imagen..." class="form-control" name="">
			</div>
			<div class="form-group">
				<h5>Tipo</h5>
				<select name="publicidad_tipo" class="form-control form-control">
				  <option>Seleccionar Tipo de publicidad</option>
				</select>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" value="Guardar" name="">
		</form>
	</div>
</section>


@endsection