@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categorias</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalCategoria">Agregar Categoria</button>
      </div>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->name}}</td>
            <td class="d-flex ">
              <button type="button" id="{{ $categoria->id }}" class="btn btn-sm btn-outline-secondary mr-2 editar"  data-toggle="modal" data-target="#modalCategoriaEditar">Editar</button>
              <form action="/cms/categoria/delete/{{$categoria->id}}" method="POST">
                @csrf
                <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-secondary">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- Modal Crear categorias -->
<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="modalSubscriptor" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSubscriptor">Agregar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/categoria/create" method="POST" id="form_create_category">
          @csrf
          <input class="form-control" type="text" name="category_name" placeholder="Nombre Categoria">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="agregarCategoria">Agregar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar categorias -->
<div class="modal fade" id="modalCategoriaEditar" tabindex="-1" role="dialog" aria-labelledby="modalCategoriaEditar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoriaEditar">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/categoria/edit" method="POST" id="form_edit_category">
          @csrf
          <input class="form-control" id="input_editar_categoria" type="text" name="category_update" placeholder="Nombre Categoria">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="editarCategoria">Editar</button>
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
      let input = document.getElementById('input_editar_categoria');
      

      formEdit.action =  `/cms/categoria/edit/${e.target.id}` 

      axios.get(`/cms/categoria/${e.target.id}`)
        .then(response => {
          input.value = response.data.name
        })
    })
  });

</script>
@endsection
