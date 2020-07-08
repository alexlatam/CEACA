@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Revista</h4>
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
  <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalRevista">Agregar Revista</button>
  </div>
</section>

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
            <input class="form-control" type="text" name="revista_name" placeholder="Titulo Revista">
          </div>
          <div class="form-group">
            <h5>Archivo</h5>
            <input type="file" name="revista_file">
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
	document.querySelector('#agregarRevista').addEventListener('click', () =>{
		document.querySelector('#form_revista').submit();
	});
</script>
@endsection