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
				<input type="text" id="url" name="publicidad_url" placeholder="url..." class="form-control" name="">
			</div>
			<div class="form-group col-12">
				<h5>Sección </h5>
				<select class="form-control" name="publicidad_seccion">
					<option value="home">Home</option>
					<option value="quienes somos">Quienes Somos</option>
					<option value="revista">Revistas</option>
					<option value="club ceaca">Club ceaca</option>
					<option value="contactanos">Contactanos</option>
					<option value="capacitaciones">Capacitaciones</option>
					<option value="perfil">Perfil Usuario</option>
				</select>
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

<script type="text/javascript">
	let formulario = document.getElementById('form');
	let urlPublicidad = document.getElementById('url');
	let botonPublicidad = document.getElementById('submit_button');
	let imagenPublicidad = document.getElementById('file_input');

	if(botonPublicidad){
		botonPublicidad.addEventListener('click', (e) => {
			e.preventDefault();

			if(!validarServicio())
			{
			  return;
			}

			const archivo = imagenPublicidad.files[0];

			console.log(archivo)

			if(archivo.size > maximoBytes) {
			  const alertSize = maximoBytes / 1000000;

			  alert(`el tamaño máximo por archivo es ${alertSize} MB`);

			  file.value = "";
			} else {
			  formulario.submit();
			}

		});
	}


	const validarServicio = () => {
		if(urlPublicidad.value === ""){
			alert('Debe agregar una url');
			return false;
		} else if(imagenPublicidad.files.length <= 0)
		{	
			alert('Debe agregar una imagen');
			return false;
		} else {
			return true;
		}
	} 

</script>

@endsection