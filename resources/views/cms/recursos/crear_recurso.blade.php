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
				<input type="text" id="seccion_title" name="recurso_title" placeholder="Titulo..." class="form-control" maxlength="191">
			</div>
			<div class="form-group col-12">
				<h5>Descripción</h5>
				<textarea class="ckeditor" id="seccion_content" name="recurso_descripcion"></textarea>
				<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
			</div>
			<div class="form-group col-12">
				<h5>Membresias donde se podrá ver y descargar el recurso</h5>
				@foreach($membresias as $membresia)
				<div class="">
					<label class="form-check-label" for="exampleCheck1">
						{{$membresia->title}}
						<input type="checkbox" class="checkbox_validate" value="{{$membresia->id}}" name="recurso_membership[]" id="exampleCheck1">
					</label> 
				 </div>
				@endforeach
			</div>
			<div class="form-group col-12">
				<h5>Recurso</h5>
				<input type="file" id="recursoFile" name="recurso_file">
			</div>
			<div class="col-auto mt-3">
				<button type="button" class="btn btn-success px-5 col-auto" id="seccion_submit" onclick="crearRecurso()">Crear Recurso</button>
				<span hidden data-toggle="modal" data-target="#enviarSinArchivo" id="buttonModalActive"></span>
			</div>
		</form>
	</div>
</section>

<div class="modal fade" id="enviarSinArchivo" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea crear este recurso sin un archivo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modalCloseButton">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
      	<button type="button" class="btn btn-success px-4" onclick="enviarRecurso()">Continuar</button>
      </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	let seccionForm = document.getElementById('recurso_form')
	let seccionTitle = document.getElementById('seccion_title')
	let seccionContent = document.getElementById('seccion_content')
	let checkboxButtons = document.querySelectorAll('.checkbox_validate');
	let recursoFile = document.getElementById('recursoFile')
	let modal = document.getElementById('enviarSinArchivo');
	let modalCloseButton = document.getElementById('modalCloseButton')	
	let buttonModalActive = document.getElementById('buttonModalActive')

	function enviarRecurso(){
		modalCloseButton.click()
		seccionForm.submit();
	}

	function crearRecurso(){
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

		let archivo = recursoFile.files.length

		if(archivo>0){
		    seccionForm.submit();
		} else {
			buttonModalActive.click()
		}
	}

	const validarSeccion = () => {
		if(seccionTitle.value === ""){
			alert('Debes agregar un titulo')
			return false;
		}else {
			return true;
		}
	}

</script> 

@endsection