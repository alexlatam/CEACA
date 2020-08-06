@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Capacitación</h1>
    <div class="btn-group mr-2">
      <a href="/cms/capacitaciones" type="button" class="btn btn-sm btn-outline-success">Volver</a>
    </div>
  </div>

  <div class="">
    @if(session('message'))
    <div class="alert alert-success my-4" role="alert">
      {{session('message')}}
    </div>
    @endif

    <form action="/cms/actualizar/capacitacion/{{$capacitacion->id}}" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" type="text" id="input_title" name="titulo_capacitacion" value="{{$capacitacion->titulo}}" placeholder="Titulo" required maxlength="255">
        </div>
        <div class="col-12 mb-4">
          <h5>Categoría</h5>
          <select name="categoria_capacitacion" id="servicio_categoria" class="form-control form-control">
            <option>Seleccionar Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}" <?php if ($capacitacion->categoria->id == $categoria->id) echo 'selected' ?>>{{$categoria->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción</h5>
          <textarea class="ckeditor" id="input_descripcion" name="descripcion_capacitacion">{{$capacitacion->descripcion}}</textarea>
        </div>
        <div class="col-12 mb-4">
          <h5>Cambiar Imagen</h5>
          <input type="file" id="file_input" name="imagen_capacitacion">
        </div>
        <div class="col-12 mb-5">
          <a href="/cms/capacitaciones" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="submit" id="submit_button" class="btn btn-success" value="Actualizar Capacitación">
        </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  let submit = document.getElementById('submit_button');
  let file = document.getElementById('file_input');
  let formulario = document.getElementById('form');
  let tituloServico = document.getElementById('input_title');
  let descripcionServicio = document.getElementById('input_descripcion');
  let categoriaServicio = document.getElementById('servicio_categoria');



  //inputs

  texts = document.querySelectorAll('.input-text');

  submit.addEventListener('click', (e) => {
    e.preventDefault();

    if(!validarServicio()){
      return 
    }

    const archivo = file.files[0];

    if(archivo){
      if (archivo.size > maximoBytes) {
        const alertSize = maximoBytes / 1000000;

        alert(`el tamaño máximo por archivo es ${alertSize} MB`);

        file.value = "";
      } else {
        formulario.submit();
      }
    } else {
      formulario.submit();
    }

  });


  const validarServicio = () => {
    if (tituloServico.value <= 0) {
      alert('Debe agregar un titulo');
      return false;


    } else if (CKEDITOR.instances.input_descripcion.getData() == '') {
      alert('Debe Agregar una descripción');
      return false

    }  else if (categoriaServicio.selectedIndex === 0) {
      alert('Debe seleccionar una carategoria');
      return false
    } else {
      return true;
    }
  }
</script>

<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
@endsection