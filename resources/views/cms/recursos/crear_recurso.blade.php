@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				Crear Recurso
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/recursos" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
		</div>
		<hr>
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
		<form action="/cms/guardar/recurso" class="row" id="recurso_form" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-12">
				<h5>Titulo</h5>
				<input type="text" id="seccion_title" name="recurso_title" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group col-12">
				<h5>Descripción</h5>
				<textarea class="form-control" id="seccion_content" name="recurso_descripcion"></textarea>
			</div>
			<div class="form-group col-12">
				<h5>Tipo de membresia</h5>
				@foreach($membresias as $membresia)
				<div class="">
					<label class="form-check-label" for="exampleCheck1">
						{{$membresia->membresia}}
						<input type="checkbox" value="{{$membresia->id}}" name="recurso_membership[]" id="exampleCheck1">
					</label> 
				 </div>
				@endforeach
			</div>
			<div class="form-group col-12">
				<h5>Recurso</h5>
				<input type="file" id="seccion_img" name="recurso_file">
			</div>
			<div class="col-auto mt-3">
				<input type="submit" class="btn btn-success px-5 col-auto" id="seccion_submit" value="Crear Recurso">
			</div>
		</form>
	</div>
</section>


<!-- <script type="text/javascript">
	let seccionForm = document.getElementById('seccion_form')
	let seccionTitle = document.getElementById('seccion_title')
	let seccionSubtitle = document.getElementById('seccion_subtitle')
	let seccionContent = document.getElementById('seccion_content')
	let seccionImg = document.getElementById('seccion_img')

	let seccionSubmit = document.getElementById('seccion_submit')


	seccionSubmit.addEventListener('click', (e) => {
		e.preventDefault()
		if (!validarSeccion()) {
			return;
		}

		let archivo = seccionImg.files[0]

		if(archivo)
		{
		  if(archivo.size > maximoBytes) {
		    const alertSize = maximoBytes / 1000000;

		    alert(`el tamaño máximo por archivo es ${alertSize} MB`);

		    seccionImg.value = "";
		  } else {
		    seccionForm.submit();
		  }
		}
	});


	const validarSeccion = () => {
		if(seccionTitle.value === ""){
			alert('Debes agregar un titulo')
			return false;
		} else if(seccionSubtitle.value === ""){
			alert('Debes agregar un subtitulo')
			return false;
		} else if(seccionContent.value === ""){
			alert('Debes agregar un contenido')
			return false;
		} else if (seccionImg.files.length <= 0){
			alert('Debes agregar una imagen')
			return false;
		} else {
			return true;
		}
	}

</script> -->

@endsection