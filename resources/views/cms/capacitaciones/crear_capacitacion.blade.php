@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Capacitacion</h1>
    <div class="btn-group mr-2">
      <a href="/cms/capacitaciones" type="button" class="btn btn-sm btn-outline-success">Volver</a>
    </div>
  </div>


  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif
    <form action="/cms/guardar/capacitacion" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" id="input_title" type="text" name="titulo_capacitacion" value="" placeholder="Titulo" required maxlength="255">
        </div>
        <div class="col-6 mb-4">
          <h5>Categoría</h5>
          <select name="categoria_capacitacion" id="servicio_categoria" class="form-control form-control">
            <option value="">Seleccionar Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción</h5>
          <textarea class="ckeditor" id="input_descripcion" name="descripcion_capacitacion"></textarea>
        </div>
        <div class="col-12 mb-4">
          <h5 style="display: block">Imagen</h5>
          <input type="file" id="file_input" name="imagen_capacitacion">
        </div>
        <div class="col-12 mb-5">
          <a href="/cms/capacitaciones" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="submit" id="submit_button" class="btn btn-success px-5" value="Crear Capacitación">
        </div>
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

    if (archivo.size > maximoBytes) {
      const alertSize = maximoBytes / 1000000;

      alert(`el tamaño máximo por archivo es ${alertSize} MB`);

      file.value = "";
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
    } else if (file.files.length <= 0) {
      alert('Debe cargar una imagen')
      return false

    } else if (categoriaServicio.selectedIndex === 0) {
      alert('Debe seleccionar una carategoria');
      return false
    } else {
      return true;
    }
  }
</script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
@endsection