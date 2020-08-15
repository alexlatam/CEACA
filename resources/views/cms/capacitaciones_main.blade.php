@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
    <div class="col-auto">
      <h4>Capacitaciones</h4>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="container">
      <div class="jumbotron mt-2 p-3">
        <h2>Categorías de capacitaciones</h2>
        <p class="lead">En esta sección podrás crear, editar y eliminar todas las categorías correspondientes a las capacitaciones del sitio web.</p>
        <a class="btn btn-lg btn-outline-success" href="/cms/capacitaciones/categorias" role="button">Categorías &raquo;</a>
      </div>
    </div>
    <div class="container">
      <div class="jumbotron mt-2 p-3">
        <h2>Capacitaciones</h2>
        <p class="lead">En esta sección podrás crear, editar y eliminar todas las capacitaciones del sitio web.
        <br>
        Ten en cuenta que cada capacitación deberá estar asociada con una categoría.
        </p>
        <a class="btn btn-lg btn-outline-success" href="/cms/capacitaciones" role="button">Capacitaciones &raquo;</a>
      </div>
    </div>
  </div>
</section>
@endsection