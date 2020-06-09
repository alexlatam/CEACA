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
              <a href="#" type="button" class="btn btn-sm btn-outline-secondary mr-2">Editar</a>
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

<script type="text/javascript">
  let formulario = document.getElementById('form_create_category');

  document.getElementById('agregarCategoria').addEventListener('click', () => {
    formulario.submit();
  });
</script>
@endsection
