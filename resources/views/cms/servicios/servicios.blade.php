@extends('cms')


@section('content')
<section>

  @if(session('message'))
  <div class="alert alert-danger my-4" role="alert">
    {{session('message')}}
  </div>
  @endif

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Servicios Técnicos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/servicios" class="btn btn-sm btn-outline-danger px-4 mr-3">Volver</a>
        <a href="/cms/crear/servicios" type="button" class="btn btn-sm btn-outline-success">Agregar Servicio</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Logo</th>
          <th>Imagen</th>
          <th>Titulo</th>
          <th>Descripción</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($servicios as $servicio)
        <tr>
          <td>{{$servicio->id}}</td>
          <td>
            @if(substr($servicio->logo, 0, 4) === 'http')
            <img src="{{ $servicio->logo }}" class="publicidades_card-img" alt="" style="width: 40px; height: 40px;">
            @elseif($servicio->logo)
            <img src="{{ asset('img/services/logos/'. $servicio->logo) }}" alt="" style="width: 40px; height: 40px;">
            @endif
          </td>
          <td>
            @if(substr($servicio->imagen, 0, 4) === 'http')
            <img src="{{ $servicio->imagen }}" class="publicidades_card-img" alt="" style="width: 40px; height: 40px;">
            @elseif($servicio->imagen)
            <img src="{{ asset('img/services/'. $servicio->imagen) }}" alt="" style="width: 40px; height: 40px;">
            @endif
          </td>
          <td>{{$servicio->titulo}}</td>
          <td>
            @if(strlen($servicio->descripcion)>75)
            @php {{ $descripcion = substr($servicio->descripcion,0,75).'...'; }} @endphp
            @else
            @php {{ $descripcion=$servicio->descripcion; }} @endphp
            @endif
            @php {{ echo ($descripcion); }} @endphp
          </td>
          <td class="d-flex">
            <a href="/cms/editar/servicio/{{$servicio->id}}" class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
            <form action="/cms/eliminar/servicio/{{$servicio->id}}" method="POST">
              @csrf
              <button type="button" class="btn btn-sm btn-outline-danger servicio_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea eliminar ete servicio?</h5>
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

<script type="text/javascript">
  let eliminarButtons = document.querySelectorAll('.servicio_eliminar');
  let formModal = document.getElementById('modal_eliminar_usuario_form')
  let submitEliminar = document.getElementById('submitModalEliminar');


  submitEliminar.addEventListener('click', () => {
    formModal.submit();
  });

  if (eliminarButtons) {
    eliminarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();


        formPadre = e.target.parentNode;
        console.log(formPadre);

        formModal.action = formPadre.action
      });
    });
  }
</script>
@endsection