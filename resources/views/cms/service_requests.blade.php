@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Servicios Requests</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalMiembro">Agregar Requests</button>
      </div>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>País</th>
          <th>Empresa</th>
          <th>mensaje</th>
          <th>fecha</th>
          <th>servicio id</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($requests as $request)
          <tr>
            <td>{{$request->id}}</td>
            <td>{{$request->nombre }}</td>
            <td>{{$request->correo}}</td>
            <td>{{$request->pais}}</td>
            <td>{{$request->empresa}}</td>
            <td>{{$request->mensaje}}</td>
            <td>{{$request->fecha}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<div class="modal fade" id="modalMiembro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          	<input class="form-control" type="text" name="name" placeholder="Subscriptor Nombre">
          </div>
          <div class="form-group">
          	<input class="form-control" type="email" name="email" placeholder="Subscriptor email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
@endsection