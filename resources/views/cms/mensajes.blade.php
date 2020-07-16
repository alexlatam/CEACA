@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Mensajes de contacto</h4>
</div>
<hr>

  
</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Nombre</th>
	        <th>Correo</th>
	        <th>Mensaje</th>
	        <th>Ver</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($mensajes as $mensaje)
	        <tr>
	          <td>{{$mensaje->id}}</td>
	          <td>{{$mensaje->name}}</td>
	          <td>{{$mensaje->email}}</td>
              <td>{{$mensaje->message}}</td>
              <td>
              	<button class="btn btn-sm btn-outline-success mensaje" data-toggle="modal" data-target="#modalMensje">Ver</button>
              </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>

<div class="modal fade" id="modalMensje" tabindex="-1" role="dialog" aria-labelledby="modalMensje" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMensje">Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/load/file" id="form_revista" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5 id="mensaje_title"></h5>
          </div>
          <div class="form-group">
            <h5 id="mensaje_email">Correo: </h5>
          </div>
          <div class="form-group">
          	<textarea id="mensaje_content" class="form-control"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	let mensajesButton = document.querySelectorAll('.mensaje')

	let title = document.getElementById('mensaje_title')
	let email = document.getElementById('mensaje_email')
	let content = document.getElementById('mensaje_content')
	if(mensajesButton)
	{
		mensajesButton.forEach( mensaje => {
			mensaje.addEventListener('click', (e) => {
				let nombre = e.target.parentNode.parentNode.children[1]
				let correo = e.target.parentNode.parentNode.children[2]
				let mensaje = e.target.parentNode.parentNode.children[3]


				title.textContent = nombre.textContent
				email.textContent = `Correo: ${correo.textContent}`
				content.textContent = mensaje.textContent
				
			});
		});
	}
</script>
@endsection