@extends('cms')


@section('content')
<section>

  @if(session('message'))
    <div class="alert alert-danger" role="alert">
      {{session('message')}}
    </div>
  @endif

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Capacitaciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/crear/capacitacion" type="button" class="btn btn-sm btn-outline-success">Agregar Capacitación</a>
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
        @foreach($capacitaciones as $capacitacion)
          <tr>
            <td>{{$capacitacion->id}}</td>
            <td>
               <img src="{{ asset(''. $capacitacion->logo) }}" alt="" style="width: 40px; height: 40px;">
            </td>
            <td>
              <img src="{{ asset(''. $capacitacion->imagen) }}" alt="" style="width: 40px; height: 40px;">
            </td>
            <td>{{$capacitacion->titulo}}</td>
            <td>
            @php {{ $descripcion = substr($capacitacion->descripcion,0,250); }} @endphp
                            {{ $descripcion.'...' }}
            </td>
            <td class="d-flex">
              <a href="/{{$capacitacion->id}}"class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <form action="/{{$capacitacion->id}}" method="POST">
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






