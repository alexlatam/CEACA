@extends('cms')

@section('content')
<section>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Recursos Descargables</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/club" class="btn btn-sm btn-outline-danger px-4 mr-3">Volver</a>
        <a href="/cms/crear/recurso" class="btn btn-sm btn-outline-success col-auto ml-auto px-4">Agregar recurso</a>
      </div>
    </div>
  </div>
	<hr>
	@if(session('message'))
	<div class="alert alert-success my-3" role="alert">
		{{session('message')}}
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-danger my-3" role="alert">
		{{session('error')}}
	</div>
	@endif

</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
         	<th>Titulo</th>
	        <th>Descripcion</th>
	        <th>Membresias</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
			@foreach($recursos as $recurso)
				<tr>
	    		<td>{{$recurso->id}}</td>
	    		<td>{{$recurso->titulo}}</td>
	    		<td>{{$recurso->descripcion}}</td>
	    		<td>
	    			@foreach($recurso->plans as $planes)
	    				{{$planes->title}},
	    			@endforeach
	    		</td>
	    		<td class="d-flex">
	    			<a href="/cms/editar/recurso/{{$recurso->id}}"class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
	    			@if($recurso->recurso)
	    				<a href="/cms/download/recurso/{{$recurso->id}}"class="btn btn-sm btn-outline-success mr-2 editar">Descargar</a>
	    			@endif
	    			<form action="/cms/eliminar/recurso/{{$recurso->id}}" method="POST">
	    			  @csrf
	    			  <button type="button" class="btn btn-sm btn-outline-danger recurso_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
	    			</form>
				</td>
			</tr>
	    	@endforeach
	    </tbody>
	  </table>

	 <div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header">
	         <h5 class="modal-title" id="">¿Seguro que desea Eliminar este recurso?</h5>
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
	 	let eliminarButtons = document.querySelectorAll('.recurso_eliminar');
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

	 	      formModal.action = formPadre.action
	 	    });
	 	  });
	 	}
	 </script>
@endsection