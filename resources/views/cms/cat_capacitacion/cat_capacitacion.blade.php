@extends('cms')


@section('content')
<section>
  @if(session('message') === 'Categoría guardada correctamente' || session('message') === 'Categoria eliminada con éxito' || session('message') === 'Categoria actualizada con éxito')
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  @if(session('message') === 'No se pudo eliminar la categoría')
        <div class="alert alert-danger my-3" role="alert">
          {{session('message')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Categorias de capacitaciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/capacitacion" class="btn btn-sm btn-outline-danger px-4 mr-3">Volver</a>
        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modalCategoria">Agregar Categoria </button>
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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>
              @if(substr($categoria->imagen, 0, 4) === 'http')
                  <img src="{{ $categoria->imagen }}" class="publicidades_card-img" alt="" style="width: 40px; height: 40px;">
              @elseif($categoria->imagen)
                   <img src="{{ asset('capacitaciones/categorias/'. $categoria->imagen) }}" alt="" style="width: 40px; height: 40px;">
              @endif
            </td>
            <td>{{$categoria->name}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td class="d-flex ">
              <button type="button" id="{{ $categoria->id }}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalCategoriaEditar">Editar</button>
              <form action="/cms/eliminar/category/capacitacion/{{$categoria->id}}" method="POST">
                @csrf
                <button type="button" class="btn btn-sm btn-outline-danger catCap_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
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
        <form action="/cms/crear/category/capacitacion" method="POST" id="form_create_category" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5>Nombre</h5>
            <input class="form-control" id="crear_categoriaNombre" type="text" name="category_name" placeholder="Nombre Categoria" maxlength="191">
          </div>
          <div class="form-group">
            <h5>Descripción</h5>
            <textarea class="form-control" id="crear_categoriaDescripcion" name="category_description"></textarea>
          </div>
          <div class="form-group">
            <h5>Imagen</h5>
            <input type="file" id="categorias_file" name="category_image">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success px-4" id="agregarCategoria">Crear Categoria</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar categorias -->
<div class="modal fade" id="modalCategoriaEditar" tabindex="-1" role="dialog" aria-labelledby="modalCategoriaEditar" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoriaEditar">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/categoria/edit" method="POST" id="form_edit_category" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="category_name" id="categoria_nombre" placeholder="Nombre Categoria" maxlength="191">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="categoria_descripcion" name="category_description"></textarea>
          </div>
          <div class="form-group">
            <input type="file" id="categorias_editar_file" name="category_image">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success px-4" id="editarCategoria">Editar Categoria</button>
      </div>
    </div>
  </div>
</div>

<!--Modal eliminar  -->
  
<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea Eliminar esta categoría?</h5>
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
  let formularioCategorias = document.getElementById('form_create_category');
  let botonesEditar = document.querySelectorAll('.editar');
  let formEdit = document.getElementById('form_edit_category');

  let crearImagen = document.getElementById('categorias_file');
  let editarImagen = document.getElementById('categorias_editar_file');

  //inputs crear
  let crearNombre = document.getElementById('crear_categoriaNombre')
  let crearDesc = document.getElementById('crear_categoriaDescripcion')

  //inputs editar
  let categoriaNombre = document.getElementById('categoria_nombre');
  let categoriaDescripcion = document.getElementById('categoria_descripcion');


  //boton eliminar
  let eliminarButtons = document.querySelectorAll('.catCap_eliminar');
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
        console.log(formPadre);

        formModal.action = formPadre.action
      });
    });
  }

  document.getElementById('agregarCategoria').addEventListener('click', (e) => {
    e.preventDefault();

    if(crearNombre.value === "")
    {
      
      alert('Debes agregar un titulo')
      return;
    
    }else if (crearDesc.value === ""){
      alert('Debes agregar una descripcion')
      return;
    }else if (crearImagen.files.length <= 0){
      alert('Debes agregar una imagen')
      return;
    }

    

    const archivo = crearImagen.files[0];

    if(archivo.size > maximoBytes) {
      const alertSize = maximoBytes / 1000000;

      alert(`el tamaño máximo por imagen es ${alertSize} MB`);

      crearImagen.value = "";
    } else {
      formularioCategorias.submit();
    }
  });

  document.getElementById('editarCategoria').addEventListener('click', () => {

    if(categoriaNombre.value === "")
    {
      
      alert('Debes agregar un titulo')
      return;
    
    }else if (categoriaDescripcion.value === ""){
      alert('Debes agregar una descripcion')
      return;
    }


    const archivo = editarImagen.files[0];

    if(archivo){
      if(archivo.size > maximoBytes) {
        const alertSize = maximoBytes / 1000000;

        alert(`el tamaño máximo por imagen es ${alertSize} MB`);

        editarImagen.value = "";
      } else {
        formEdit.submit();
      }
    } else {
      formEdit.submit();
    }

    
  });

  botonesEditar.forEach(boton => {
    boton.addEventListener('click', (e) =>{
      

      formEdit.action =  `/cms/actualizar/capacitacion/category/${e.target.id}` 

      axios.get(`/cms/capacitacion/category/${e.target.id}`)
        .then(response => {
          categoriaNombre.value = response.data.name;
          categoriaDescripcion.value = response.data.descripcion;
        })
    })
  });

</script>

@endsection
