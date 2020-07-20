@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
  <div class="col-auto"><h4>Club CEACA</h4></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12 mb-4">
      <a href="/cms/membresias" class="btn btn-success px-5 py-3">Membresias del Club</a>
    </div>
    <div class="col-12 mb-4">
      <a href="/cms/recursos" class="btn btn-success px-5 py-3">Recursos Descargables</a>
    </div>
    <div class="col-12">
      <a href="/cms/miembros" class="btn btn-success px-5 py-3">Miembros del Club</a>
    </div>
  </div>
</section>
@endsection