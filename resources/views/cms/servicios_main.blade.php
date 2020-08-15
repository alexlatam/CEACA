@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
    <h4>Servicios Técnicos</h4>
  </div>
  <hr>

  <div class="container">
    <div class="jumbotron mt-2 p-3">
      <h2>Categorías de servicios</h2>
      <p class="lead">En esta sección podrás ver, crear, editar y eliminar las categorías correspondientes a los servicios técnicos</p>
      <a class="btn btn-lg btn-outline-success" href="/cms/categorias" role="button">Categorías &raquo;</a>
    </div>
  </div>

  <div class="container">
    <div class="jumbotron mt-2 p-3">
      <h2>Servicios Técnicos</h2>
      <p class="lead">En esta sección podrás ver, crear, editar y eliminar todos los servicios técnicos del sitio web.
      <br>
      Ten en cuenta que cada servicios técnico debe estar asociado a una categoría.
      </p>
      <a class="btn btn-lg btn-outline-success" href="/cms/servicios/tecnicos" role="button">Servicios Técnicos &raquo;</a>
    </div>
  </div>

</section>
@endsection