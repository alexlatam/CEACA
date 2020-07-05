@extends('cms')


@section('content')
<section>

  @if(session('message'))
    <div class="alert alert-danger" role="alert">
      {{session('message')}}
    </div>
  @endif

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Servicios Técnicos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/crear/servicios" type="button" class="btn btn-sm btn-outline-success">Agregar Servicio</a>
      </div>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
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
              @if(substr($servicio->imagen, 0, 4) === 'http')
                  <img src="{{ $servicio->imagen }}" class="publicidades_card-img" alt="" style="width: 40px; height: 40px;">
              @elseif($servicio->imagen)
                   <img src="{{ asset('img/services/'. $servicio->imagen) }}" alt="" style="width: 40px; height: 40px;">
              @endif
            </td>
            <td>{{$servicio->titulo}}</td>
            <td>
            @php {{ $descripcion = substr($servicio->descripcion,0,250); }} @endphp
                            {{ $descripcion.'...' }}
            </td>
            <td class="d-flex">
              <a href="/cms/editar/servicio/{{$servicio->id}}"class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <form action="/cms/eliminar/servicio/{{$servicio->id}}" method="POST">
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

@endsection






