@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		<h2 class="my-3">Crear Usuarios Administrativos</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/usuario" id="admin_form" method="POST">
			@csrf
			<div class="row">
				<div class="col-md-6 mb-4">
					<label>Nombre</label>
					<input class="form-control" id="admin_title" type="text" name="name" value="" placeholder="Nombre" maxlength="191">
				</div>
				<div class="col-md-6 mb-4">
					<label>Email</label>
					<input class="form-control" id="admin_email"  type="text" name="email" value="" placeholder="Email" maxlength="191">
				</div>
				<div class="col-6 mb-4">
					<label>Contraseña</label>
					<input class="form-control" id="admin_password"  type="password" name="password" value="" placeholder="contraseña">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" id="admin_submit" class="btn btn-success px-4" value="Crear Usuario">
				</div>
			</div>
		</form>
	</div>

	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Nombre</th>
	        <th>Email</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($usuarios as $usuario)
	        <tr>
	          <td>{{$usuario->id}}</td>
	          <td>{{$usuario->name}}</td>
	          <td>{{$usuario->email}}</td>
	          <td class="d-flex">
	            <a href="/cms/password/usuario/{{$usuario->id}}"class="btn btn-sm btn-outline-success mr-2 editar">Cambiar contraseña</a>
	            <form action="/cms/delete/usuario/{{$usuario->id}}" method="POST">
	              @csrf
	              <button type="button" class="btn btn-sm btn-outline-danger user_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
</section>


<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea Eliminar este usuario?</h5>
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
	let adminForm = document.getElementById('admin_form')
	let adminTitle = document.getElementById('admin_title')
	let adminEmail = document.getElementById('admin_email')
	let adminPassword = document.getElementById('admin_password')
	let adminSent = document.getElementById('admin_submit')


	let eliminarButtons = document.querySelectorAll('.user_eliminar');
	let formModal = document.getElementById('modal_eliminar_usuario_form')
	let submitEliminar = document.getElementById('submitModalEliminar');


	submitEliminar.addEventListener('click', () => {
		formModal.submit();
	});	

	if(eliminarButtons)
	{
		eliminarButtons.forEach(button => {
			button.addEventListener('click', (e) =>{

				

				formPadre = e.target.parentNode;

				formModal.action = formPadre.action
			});
		});
	}

	adminSent.addEventListener('click', (e) => {
		e.preventDefault()

		if(!adminValidacion()){
			return;
		}

		adminForm.submit();

	});

	const adminValidacion = () => {
		if(adminTitle.value ==="")
		{
			alert('Debes colocar un nombre')
			return false
		}else if (adminEmail.value === "")
		{
			alert('Debes colocar un email')
			return false
		} else if (adminPassword.value === "")
		{
			alert('Debes colocar una contraseña')
			return false
		} else {
			return true;
		}
	}

</script>



@endsection