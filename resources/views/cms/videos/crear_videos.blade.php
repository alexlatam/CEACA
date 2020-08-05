@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				Crear videos
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/videos" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif
		<form action="/cms/guardar/videos" id="form" class="row" method="POST" enctype="multipart/form-data">
			@csrf
			<!--div-- class="form-group col-12">
				<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Enlace de video <small class="text-muted">(opcional)</small></h5>
				<input type="text" id="url" name="video_url" placeholder="url..." class="form-control" maxlength="191">
			</!--div-->
			<div class="form-group col-12">
				<h5>Sección </h5>
				<select class="form-control" name="video_seccion">
					<option value="home">Home</option>
					<option value="quienes somos">Quienes Somos</option>
					<option value="revista">Revistas</option>
					<option value="club ceaca">Club ceaca</option>
					<option value="contacto">Contacto</option>
					<option value="capacitaciones">Capacitaciones</option>
					<option value="perfil">Perfil Usuario</option>
					<option value="servicios">Servicios</option>
				</select>
			</div>
			<div class="form-group col-12">
				<h5>Archivo de Video</h5>
				<input type="file" id="file_input" name="video_file">
				<input type="text" class="form-control" disabled value="Carga de video desactivada por uso de enlace" id="input_disabled" style="display: none;">
			</div>
			<div class="col-auto">
				<input type="submit" class="btn btn-success px-5 col-auto" id="submit_button" value="Crear Video">
			</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	let formulario = document.getElementById('form');
	//let urlPublicidad = document.getElementById('url');
	let botonPublicidad = document.getElementById('submit_button');
	let imagenPublicidad = document.getElementById('file_input');

	let input_disabled = document.getElementById('input_disabled')


	/*urlPublicidad.addEventListener('keyup', () => {
		if(urlPublicidad.value == '')
		{	
			imagenPublicidad.style.display = 'block';

			input_disabled.style.display = 'none';
		} else {
			input_disabled.style.display = 'block';
			imagenPublicidad.style.display = 'none';
			imagenPublicidad.value = "";
		}
	});*/

	if(botonPublicidad){
		botonPublicidad.addEventListener('click', (e) => {
			e.preventDefault();

			const archivo = imagenPublicidad.files[0];

			if(archivo)
			{
				formulario.submit();
			} else {
				alert('Debe cargar un video');
			return false;
			}

		});
	}



</script>

@endsection