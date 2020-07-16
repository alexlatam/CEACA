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
					<input class="form-control" id="admin_title" type="text" name="name" value="" placeholder="Nombre">
				</div>
				<div class="col-md-6 mb-4">
					<label>Email</label>
					<input class="form-control" id="admin_email"  type="text" name="email" value="" placeholder="Email">
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
	              <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-success">
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
</section>

<script type="text/javascript">
	let adminForm = document.getElementById('admin_form')
	let adminTitle = document.getElementById('admin_title')
	let adminEmail = document.getElementById('admin_email')
	let adminPassword = document.getElementById('admin_password')
	let adminSent = document.getElementById('admin_submit')



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