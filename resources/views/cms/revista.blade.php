@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Revista</h4>
    <button type="button" class="btn btn-sm btn-outline-success col-auto ml-auto mr-4" data-toggle="modal" data-target="#modalRevista">Agregar Revista</button>
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
	        <th>Fecha</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($revistas as $revista)
	        <tr>
	          <td>{{$revista->id}}</td>
	          <td>{{$revista->titulo}}</td>
	          <td>{{$revista->created_at}}</td>
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

<div class="modal fade" id="modalRevista" tabindex="-1" role="dialog" aria-labelledby="modalRevista" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRevista">Agregar Revista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/load/file" id="form_revista" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5>Titulo</h5>
            <input class="form-control" id="revista_title" type="text" name="revista_name" placeholder="Titulo Revista">
          </div>
          <div class="form-group">
            <h5>Archivo</h5>
            <input type="file" id="revista_file" name="revista_file">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="agregarRevista">Subir Revista</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	document.querySelector('#agregarRevista').addEventListener('click', (e) =>{
    let formulario = document.getElementById('form_revista')
    let revistaName = document.getElementById('revista_title')
    let resvitaFile = document.getElementById('revista_file')
    e.preventDefault()

    console.log('entrando')

		if (!validarRevita(revistaName, resvitaFile)){
      return; 
    }

    let archivo = resvitaFile.files[0]


    if(archivo)
    {
      if(archivo.size > maximoBytes) {
        const alertSize = maximoBytes / 1000000;

        alert(`el tamaño máximo por archivo es ${alertSize} MB`);

        resvitaFile.value = "";
      } else {
        formulario.submit();
      }
    }

	});

  const validarRevita = (title,file) => {  
    if(title.value === ""){
      alert('Debe agregar un titulo')
      return false
    } else if (file.files.length <= 0){
      alert('Debe agregar un archivo')
      return false
    } else {
      return true;
    }
  }

</script>
@endsection