@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				Crear Recurso
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/course/resource" class="btn btn-sm btn-outline-success px-5">Volver</a>
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
				<textarea class="form-control" id="seccion_content" name="recurso_descripcion"></textarea>
			</div>
			<div class="form-group col-12">
				<h5>Cursos</h5>
				<select class="form-control" name="recurso_curso_id">
					<option>Selecciona un curso</option>
				@foreach($cursos as $curso)
					<option value="{{$curso->id}}">{{$curso->titulo}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group col-12">
				<h5>Recurso</h5>
				<input type="file" id="seccion_img" name="recurso_file">
			</div>
			<div class="col-auto mt-3">
				<button type="button" class="btn btn-success px-5 col-auto" id="seccion_submit" data-toggle="modal" data-target="#EliminarUsuarios">Crear Recurso</button>
			</div>
		</form>
	</div>
</section>

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea crear este recurso sin un archivo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
      	<button type="button" class="btn btn-success px-4" id="submitModalEliminar">Continuar</button>
      </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	let seccionForm = document.getElementById('recurso_form')
	let seccionTitle = document.getElementById('seccion_title')
	let seccionContent = document.getElementById('seccion_content')
	let seccionImg = document.getElementById('seccion_img')

	let seccionSubmit = document.getElementById('seccion_submit')

	let submitModal = document.getElementById('submitModalEliminar');

	if(submitModal)
	{
		submitModal.addEventListener('click', () =>{
			seccionForm.submit();
		});
	}

	seccionSubmit.addEventListener('click', (e) => {
		e.preventDefault()



		if (!validarSeccion()) {
			return;
		}

		let archivo = seccionImg.files[0]

		if(archivo)
		{
			let modal = document.getElementById('EliminarUsuarios');
			modal.remove();	

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
		}else if(seccionContent.value === ""){
			alert('Debes agregar un contenido')
			return false;
		}else {
			return true;
		}
	}

</script> 

@endsection