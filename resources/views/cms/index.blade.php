@extends('cms')


@section('content')
	<h2 class="pt-3">Bienvenido {{auth()->guard('admin')->user()->name}}</h2>
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