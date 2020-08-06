@extends('cms')


@section('content')
<section class="publicidades">
	@if(session('message'))
	<div class="alert alert-success my-4" role="alert">
		{{session('message')}}
	</div>
	@endif
	<div class="publicidades-tipo-1 mb-5">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="h2">Imagenes Slider</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<a href="/cms/crear/slider/image" type="button" class="btn btn-sm btn-outline-success px-5">Agregar Slider</a>
				</div>
			</div>
		</div>
		@foreach($sliders as $slider)
		<div class="publicidades_card-main mb-5">
			@if(substr($slider->imagen, 0, 4) === 'http')
			<img src="{{ $slider->imagen }}" class="publicidades_card-img" alt="">
			@elseif($slider->imagen)
			<img src="{{ asset('/img/banners/'. $slider->imagen) }}" class="publicidades_card-img" alt="">
			@endif
			<div class="publicidades_card-body">
				<form class="d-inline" action="/cms/actualizar/slider/image/{{$slider->id}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h5>Titulo</h5>
						<input type="text" name="slider_titulo" value="{{$slider->titulo}}" placeholder="Titulo..." class="form-control" maxlength="191">
					</div>
					<div class="form-group">
						<h5 title="Pequeña descripción que se mostrara en el Banner">Descripción</h5>
						<textarea class="form-control" name="slider_descripcion">{{$slider->descripcion}}</textarea>
					</div>
					<!--div-- class="form-group">
							<h5 title="Al darle click sera redirigido a este enlace">Url de redirección</h5>
							<input type="text" name="slider_url" value="{{$slider->url}}" placeholder="Titulo..." class="form-control">
						</!--div-->
					<!--div-- class="form-group">
							<h5>Orden</h5>
							<input type="text" name="slider_orden" value="{{$slider->orden}}" placeholder="Titulo..." class="form-control">
						</!--div-->
					<div class="form-group">
						<h5>Cambiar Imagen</h5>
						<input type="file" class="file-input" name="slider_imagen">
					</div>
					<input type="submit" class="btn btn-success px-5 mt-3 slider_submit" value="Actualizar Slider">
				</form>
				<form class="d-inline" action="/cms/delete/slider/image/{{$slider->id}}" method="GET">
					<button type="button" class="btn btn-outline-danger px-4 mt-3 slider_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar Slider</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>

	<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="">¿Seguro que desea Eliminar este slider?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="modal_eliminar_usuario_form" method="GET">
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

</section>
<script type="text/javascript">
	let publicidad_inputs = document.querySelectorAll('.file-input');

	publicidad_inputs.forEach(input => {
		input.onchange = function(e) {
			let padre = e.target.parentNode.parentNode.parentNode.parentNode
			let imgContainer = padre.children[0];


			let reader = new FileReader();
			reader.readAsDataURL(e.target.files[0]);

			reader.onload = function() {
				imgContainer.src = reader.result;
			}



		}
	});
</script>

<script type="text/javascript">
	let sliderSubmit = document.querySelectorAll('.slider_submit');

	let eliminarButtons = document.querySelectorAll('.slider_eliminar');
	let formModal = document.getElementById('modal_eliminar_usuario_form')
	let submitEliminar = document.getElementById('submitModalEliminar');


	submitEliminar.addEventListener('click', () => {
		formModal.submit();
	});	

	if(eliminarButtons)
	{
		eliminarButtons.forEach(button => {
			button.addEventListener('click', (e) =>{
				e.preventDefault();
				

				formPadre = e.target.parentNode;
				console.log(formPadre);

				formModal.action = formPadre.action
			});
		});
	}


	if(sliderSubmit){
		sliderSubmit.forEach( submit => {
			submit.addEventListener('click', (e) => {
				e.preventDefault()

				let formulario = e.target.parentNode
				let title = e.target.parentNode[1]
				let img = e.target.parentNode[3]



				let archivo = img.files[0]
				formulario.submit();

			});
		});
	}

</script>
@endsection