@extends('cms')


@section('content')
<section class="publicidades">
	<div class="publicidades-tipo-2">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="h2">Videos</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <div class="btn-group mr-2">
			    <a href="/cms/crear/videos" type="button" class="btn btn-sm btn-outline-success">Agregar Videos</a>
			  </div>
			</div>	
		</div>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
		  {{session('message')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
		  {{session('error')}}
		</div>
		@endif
		@php {{$x=0;}} @endphp
		@foreach($videos as $video)
		@php {{++$x;}} @endphp
			<div class="publicidades_card-main mb-5">
				@if(substr($video->video, 0, 4) === 'http')
                    <iframe width="560" height="315" src="{{$video->video}}" frameborder="0" allow="accelerometer"></iframe>
                @elseif($video->video)
                     <video src="{{asset('video/' . $video->video)}}"></video>
                @endif
				<div class="publicidades_card-body">
					<form action="/cms/actualizar/video/{{$video->id}}" id="formPublicidad" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Enlace de video <small class="text-muted">(opcional)</small></h5>
						@if(substr($video->video, 0, 4) === 'http')
							<input type="text"  name="video_url" value="{{$video->video}}" placeholder="Descripcion..." class="form-control url-video" maxlength="191">
						@elseif($video->video)
							<input type="text"   name="video_url" value="" placeholder="Descripcion..." class="form-control url-video" maxlength="191">
						@endif
						</div>
						<div>
							<h5>Sección</h5>
							<select class="form-control" name="video_seccion">
								<option value="home" <?php if($video->seccion == "home" ) echo 'selected'?> >Home</option>
								<option value="quienes somos" <?php if($video->seccion == "quienes somos" ) echo 'selected'?>>Quienes Somos</option>
								<option value="revista"  <?php if($video->seccion == "revista" ) echo 'selected'?>>Revistas</option>
								<option value="club ceaca"  <?php if($video->seccion == "club ceaca" ) echo 'selected'?>>Club ceaca</option>
								<option value="contacto"  <?php if($video->seccion == "contacto" ) echo 'selected'?>>Contacto</option>
								<option value="servicios"  <?php if($video->seccion == "servicios" ) echo 'selected'?>>Servicios</option>
								<option value="capacitaciones"  <?php if($video->seccion == "capacitaciones" ) echo 'selected'?>>Capacitaciones</option>
								<option value="perfil"  <?php if($video->seccion == "perfil" ) echo 'selected'?> >Perfil Usuario</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<h5>Cambiar Video</h5>
							@if(substr($video->video, 0, 4) === 'http')
								<input type="file" id="publicidad_imagen" class="file-input" name="video_file" style="display: none;">
								<input type="text" class="form-control" disabled value="Carga de video desactivada por uso de enlace" id="input_disabled" >
							@elseif($video->video)
								<input type="file" id="publicidad_imagen" class="file-input" name="video_file" >
								<input type="text" class="form-control" disabled value="Carga de video desactivada por uso de enlace" id="input_disabled" style="display: none;">
							@endif
						</div>
						<input type="submit" id="submit_publicidad" class="btn btn-success btn-sm px-5 mt-3" value="Actualizar Publicidad">
						<button class="btn btn-outline-danger btn-sm px-5 mt-3 publicidad_eliminar" type="button" data-toggle="modal" data-target="#EliminarUsuarios" id="{{$video->id}}">Eliminar</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</section>

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea Eliminar este Video?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal_eliminar_usuario_form" method="POST">
          @csrf
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger px-4" id="submitModalEliminar">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	let eliminarButtons = document.querySelectorAll('.publicidad_eliminar');
	let formModal = document.getElementById('modal_eliminar_usuario_form')
	let submitEliminar = document.getElementById('submitModalEliminar');

	let urlInput = document.querySelectorAll('.url-video');
	

	urlInput.forEach(url => {
		url.addEventListener('keyup', (e)=> {
			input = e.target;

			form = e.target.parentNode.parentNode
			inputDisabled = form[4]
			inputFile = form[3]

			if(input.value == ''){
				inputDisabled.style.display = 'none';
				inputFile.style.display = 'block';
			} else {
				inputDisabled.style.display = 'block';
				inputFile.style.display = 'none';

				inputFile.value = ''
			}
		});
	});


	submitEliminar.addEventListener('click', () => {
	  formModal.submit();
	}); 

	if(eliminarButtons)
	{
	  eliminarButtons.forEach(button => {
	    button.addEventListener('click', (e) =>{
	      e.preventDefault();
	      

	      formModal.action = `/cms/eliminar/video/${e.target.id}`
	    });
	  });
	}
</script>

<script type="text/javascript">
	let urlPublicidad = document.getElementById('url');
	let formPublicidad = document.getElementById('formPublicidad')
	let imagenPublicidad = document.getElementById('publicidad_imagen')
	let submitPublicidad = document.getElementById('submit_publicidad')

	submitPublicidad.addEventListener('click', (e) => {
		e.preventDefault();


		if(!validarServicio())
		{
		  return;
		}

		const archivo = imagenPublicidad.files[0];


		if(archivo)
		{
			if(archivo.size > maximoBytes) {
			  const alertSize = maximoBytes / 50000000000;

			  alert(`el tamaño máximo por archivo es ${alertSize} MB`);

			  imagenPublicidad.value = "";
			} else {
			  formPublicidad.submit();
			}
		} else {
			formPublicidad.submit();
		}

		

	});


	const validarServicio = () => {
		return true;
	} 

</script>

<script type="text/javascript">
	let publicidad_inputs = document.querySelectorAll('.file-input');

	publicidad_inputs.forEach(input => {
		input.onchange = function (e){
			let padre = e.target.parentNode.parentNode.parentNode.parentNode
			let imgContainer = padre.children[0];


			let reader = new FileReader();
			reader.readAsDataURL(e.target.files[0]);

			reader.onload = function (){
				imgContainer.src = reader.result;
			}

			

		}
	});
</script>
@endsection