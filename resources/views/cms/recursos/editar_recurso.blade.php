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
		<form action="/cms/actualizar/recurso/{{$recurso->id}}" class="row" id="recurso_form" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-12">
				<h5>Titulo</h5>
				<input type="text" id="seccion_title" name="recurso_title" placeholder="titulo" value="{{$recurso->titulo}}" class="form-control" maxlength="191">
			</div>
			<div class="form-group col-12">
				<h5>Descripción</h5>
				<textarea class="ckeditor" id="seccion_content" name="recurso_descripcion">{{$recurso->descripcion}}</textarea>
				<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
			</div>
			<div class="form-group col-12">
				<h5>Tipo de membresia</h5>
				@foreach($membresias as $membresia)
				<div class="">
					<label class="form-check-label" for="exampleCheck1">
						{{$membresia->title}}
						<input type="checkbox" class="checkbox_validate" value="{{$membresia->id}}" name="recurso_membership[]" id="exampleCheck1"
						@foreach($m_relaciones as $relacion)
							<?php if($membresia->id === $relacion->id) echo 'checked' ?>
						@endforeach
						>
					</label> 
				 </div>
				@endforeach
			</div>
			<div class="form-group col-12">
				<h5>Recurso</h5>
				<input type="file" id="seccion_img" name="recurso_file">
			</div>
			<div class="col-auto mt-3">
				<input type="button" class="btn btn-success px-5 col-auto" id="buttonSubmitForm" value="Actualizar Recurso" onclick="submitForm()">
			</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	let seccionForm = document.getElementById('recurso_form')
	let seccionTitle = document.getElementById('seccion_title')
	let seccionContent = document.getElementById('seccion_content')
	let checkboxButtons = document.querySelectorAll('.checkbox_validate')

	function submitForm(){
		if (!validarSeccion()) {
			return;
		}

		if(checkboxButtons)	{
			let contador = 0;
			checkboxButtons.forEach(checkbox => {
				if(checkbox.checked){
					contador ++ 
				}
			});

			if(contador === 0){
				alert('Debe escoger una membresia')
				return;
			}
		}

		seccionForm.submit();
	}

	const validarSeccion = () => {
		if(seccionTitle.value === ""){
			alert('Debes agregar un titulo')
			return false;
		}else if(seccionContent.value === ""){
			alert('Debes agregar una descripción')
			return false;
		}else {
			return true;
		}
	}

</script> 

@endsection