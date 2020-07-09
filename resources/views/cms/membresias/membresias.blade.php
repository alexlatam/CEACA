@extends('cms')


@section('content')
<section>
  @if(session('message') === 'Membresía guardada exitosamente' || session('message') === 'Categoria eliminada con éxito' || session('message') === 'Membresía actualizada con éxito')
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

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Monto</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($membresias as $membresia)
          <tr>
            <td>{{$membresia->id}}</td>
            <td>
              @if(substr($membresia->imagen, 0, 4) === 'http')
                  <img src="{{ $membresia->imagen }}" class="publicidades_card-img" alt="" style="width: 40px; height: 40px;">
              @elseif($membresia->imagen)
                   <img src="{{ asset('img/membresias/'. $membresia->imagen) }}" alt="" style="width: 40px; height: 40px;">
              @endif
            </td>
            <td>{{$membresia->name}}</td>
            <td>{{$membresia->descripcion}}</td>
            <td class="d-flex ">
              <button type="button" id="{{ $membresia->id }}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalCategoriaEditar">Editar</button>
              <form action="/cms/membresia/delete/{{$membresia->id}}" method="POST">
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
            <input class="form-control" type="text" name="category_name" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <h5>Descripción</h5>
            <textarea class="form-control" name="category_description" required></textarea>
          </div>
          <div class="form-group">
            <h5>Costo</h5>
            <input class="form-control"  type="number" name="category_monto" required>
          </div>
          <div class="form-group">
            <h5>Imagen</h5>
            <input type="file" name="category_image">
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

<!-- Modal editar membresia -->
<div class="modal fade" id="modalCategoriaEditar" tabindex="-1" role="dialog" aria-labelledby="modalCategoriaEditar" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoriaEditar">Editar Membresía</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/categoria/edit" method="POST" id="form_edit_category" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="category_name" id="categoria_nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="categoria_descripcion" name="category_description"></textarea>
          </div>
          <div class="form-group">
            <input type="file" name="category_image">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-otuline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success px-5" id="editarCategoria">Editar Membresia</button>
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
    boton.addEventListener('click', (e) =>{
      let categoriaNombre = document.getElementById('categoria_nombre');
      let categoriaDescripcion = document.getElementById('categoria_descripcion');

      formEdit.action =  `/cms/categoria/edit/${e.target.id}` 

      axios.get(`/cms/categoria/${e.target.id}`)
        .then(response => {
          categoriaNombre.value = response.data.name;
          categoriaDescripcion.value = response.data.descripcion;
        })
    })
  });

</script>
@endsection
