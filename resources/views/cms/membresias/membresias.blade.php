@extends('cms')


@section('content')
<section>
  @if(session('message') === 'Membresía creada éxitosamente' || session('message') === 'Membresía eliminada con exito' || session('message') === 'Membresía actualizada con éxito')
  <div class="alert alert-success my-3" role="alert">
    {{session('message')}}
  </div>
  @endif

  @if(session('message') === 'No se pudo eliminar la membresía')
  <div class="alert alert-danger my-3" role="alert">
    {{session('message')}}
  </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membresías del Club Ceaca</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modalCategoria">Agregar Membresía</button>
      </div>
    </div>
  </div>


  @foreach($membresias as $membresia)
  <div class="publicidades_card-main mb-5">
    @if(substr($membresia->imagen, 0, 4) === 'http')
    <img src="{{ $membresia->imagen }}" class="publicidades_card-img" alt="">
    @elseif($membresia->imagen)
    <img src="{{ asset('img/membresias/'. $membresia->imagen) }}" class="publicidades_card-img" alt="">
    @endif
    <div class="publicidades_card-body">
      <form action="/cms/membresia/update/{{$membresia->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <h5>Nombre de la membresía</h5>
          <input type="text" name="title_plan" value="{{$membresia->title}}" placeholder="Nombre..." class="form-control">
        </div>
        <div class="form-group">
          <h5>Precio de la membresía</h5>
          <input type="number" name="monto_plan" value="{{$membresia->monto}}" class="form-control">
        </div>
        <div class="form-group">
          <h5>Descripción</h5>
          <textarea class="form-control" name="description_plan">{{$membresia->description}}</textarea>
        </div>
        <div class="form-group mt-3">
          <h5>Cambiar Imagen</h5>
          <input type="file" class="file-input" name="imagen_plan">
        </div>
        <input type="submit" class="btn btn-success btn-sm px-5" value="Actualizar Membresía">
      </form>
    </div>
  </div>
  <hr>
  @endforeach

</section>

<!-- Modal Crear membresia -->
<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="modalSubscriptor" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSubscriptor">Agregar Membresía</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/membresia/create" method="POST" id="form_create_category" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5>Nombre de la membresía</h5>
            <input class="form-control" type="text" name="plan_name" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <h5>Descripción</h5>
            <textarea class="form-control" name="plan_description" required></textarea>
          </div>
          <div class="form-group">
            <h5>Costo</h5>
            <input class="form-control" type="number" name="plan_monto" required>
          </div>
          <div class="form-group">
            <h5>Imagen</h5>
            <input type="file" name="plan_image">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success px-5" id="agregarCategoria">Crear Membresía</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  let formulario = document.getElementById('form_create_category');
  let botonesEditar = document.querySelectorAll('.editar');
  let formEdit = document.getElementById('form_edit_category');

  document.getElementById('agregarCategoria').addEventListener('click', () => {
    formulario.submit();
  });

  document.getElementById('editarCategoria').addEventListener('click', () => {
    formEdit.submit();
  });

  botonesEditar.forEach(boton => {
    boton.addEventListener('click', (e) => {
      let categoriaNombre = document.getElementById('categoria_nombre');
      let categoriaDescripcion = document.getElementById('categoria_descripcion');

      formEdit.action = `/cms/categoria/edit/${e.target.id}`

      axios.get(`/cms/categoria/${e.target.id}`)
        .then(response => {
          categoriaNombre.value = response.data.name;
          categoriaDescripcion.value = response.data.descripcion;
        })
    })
  });
</script>
@endsection