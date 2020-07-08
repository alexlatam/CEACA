@extends('cms')


@section('content')
	<h2 class="pt-3">Bienvenido {{auth()->user()->name}}</h2>
	<hr>

	<h4>Panel administrativo del sitio web <a href="https://ceaca.com/" target="_blank">Ceaca.com</a></h4>

	@if(session('error'))
	      <div class="alert alert-danger my-3" role="alert">
	        {{session('error')}}
	      </div>
	@endif

	@if(session('message'))
	      <div class="alert alert-success my-3" role="alert">
	        {{session('message')}}
	      </div>
	@endif

	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Titulo</th>
	        <th>Tiempo</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($revistas as $revista)
	        <tr>
	          <td>{{$revista->id}}</td>
	          <td>{{$revista->titulo}}</td>
	          <td>{{$revista->created_at->diffForHumans()}}</td>
	          <td class="d-flex ">
	            <button type="button" id="{{ $revista->id }}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalRevista">Editar</button>
	            <form action="/cms/revista/eliminar/{{$revista->id}}" method="POST">
	              @csrf
	              <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-success">
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>

	<div class="modal fade" id="modalRevista" tabindex="-1" role="dialog" aria-labelledby="modalRevista" aria-hidden="true" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalCategoriaEditar">Editar Revista</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="POST" id="form_edit_revista" enctype="multipart/form-data">
	          @csrf
	          <div class="form-group">
	            <input class="form-control" type="text" name="revista_titulo" id="revista_titulo" placeholder="Nombre">
	          </div>
	          <div class="form-group">
	            <input type="file" name="revista_file">
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" id="editarRevista">Editar Revista</button>
	      </div>
	    </div>
	  </div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script type="text/javascript">
	  let botonesEditar = document.querySelectorAll('.editar');
	  let formEdit = document.getElementById('form_edit_revista');

	  document.getElementById('editarRevista').addEventListener('click', () => {
	    formEdit.submit();
	  });

	  botonesEditar.forEach(boton => {
	    boton.addEventListener('click', (e) =>{
	      let revistaTitulo = document.getElementById('revista_titulo');

	      formEdit.action =  `/cms/actualizar/revista/${e.target.id}` 

	      axios.get(`/cms/obtener/revista/${e.target.id}`)
	        .then(response => {
	          revistaTitulo.value = response.data.titulo;
	        })
	    })
	  });

	</script>
@endsection