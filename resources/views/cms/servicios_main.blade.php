@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Servicios Técnicos</h4>
</div>
<hr>
  <div class="d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="/cms/categorias" class="btn btn-outline-success">Crear Categorías Servicios Técnicos</a>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/servicios/tecnicos" class="btn btn-outline-success">Agregar Servicios Técnicos</a>
      </div>
    </div>
  </div>
</section>
@endsection