@extends('cms')


@section('content')
<section class="publicidades">
	<div class="publicidades-tipo-2">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="h2">Publicidades</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <div class="btn-group mr-2">
			    <a href="/cms/crear/publicidad/secundaria" type="button" class="btn btn-sm btn-outline-success">Agregar Publicidad</a>
			  </div>
			</div>	
		</div>
		@php {{$x=0;}} @endphp
		@foreach($publicidades as $publicidad)
		@php {{++$x;}} @endphp
			<div class="publicidades_card-main mb-5">
				@if(substr($publicidad->imagen, 0, 4) === 'http')
                    <img src="{{ $publicidad->imagen }}" class="publicidades_card-img" alt="">
                @elseif($publicidad->imagen)
                     <img src="{{ asset('img/publicidad/'. $publicidad->imagen) }}" class="publicidades_card-img" alt="">
                @endif
				<div class="publicidades_card-body">
					<form action="/cms/actualizar/publicidad/{{$publicidad->id}}" id="formPublicidad" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Enlace de redirección <small class="text-muted">(opcional)</small></h5>
							<input type="text" id="url" name="publicidad_url" value="{{$publicidad->url}}" placeholder="Descripcion..." class="form-control">
						</div>
						<div class="form-group">
							<h5>Cambiar Imagen</h5>
							<input type="file" id="publicidad_imagen" class="file-input" name="publicidad_imagen">
						</div>
						<input type="submit" id="submit_publicidad" class="btn btn-success btn-sm px-5 mt-3" value="Actualizar Publicidad">
					</form>
				</div>
			</div>
		@endforeach
	</div>
</section>

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
			  const alertSize = maximoBytes / 1000000;

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
		if(urlPublicidad.value === ""){
			alert('Debe agregar una url');
			return false;
		}else {
			return true;
		}
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