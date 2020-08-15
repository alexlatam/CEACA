@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
    <div class="col-auto">
      <h4>Club CEACA</h4>
    </div>
  </div>
  <hr>
  <div class="row justify-content-around">
    <div class="container">
      <div class="jumbotron mt-2 p-3">
        <h2>Membresias del Club</h2>
        <p class="lead">En esta sección podrás crear, editar y eliminar todas las membresias correspondientes al club Ceaca</p>
        <a class="btn btn-lg btn-outline-success" href="/cms/membresias" role="button">Membresías &raquo;</a>
      </div>
    </div>
    <div class="container">
      <div class="jumbotron mt-2 p-3">
        <h2>Recursos Descargables</h2>
        <p class="lead">En esta sección podrás crear, editar y eliminar los recursos que podrán descargar los miembros del Club. 
          <br>
          Estos recursos estarán disponibles para los miembros del club, en el perfil de miembro del club. A este perfil tienen accesos los usuarios al momento de iniciar sesión como miembro.
        </p>
        <a class="btn btn-lg btn-outline-success" href="/cms/recursos" role="button">Recursos &raquo;</a>
      </div>
    </div>
    <div class="container">
      <div class="jumbotron mt-2 p-3">
        <h2>Miembros del Club</h2>
        <p class="lead">En esta sección podrás ver y administrar los miembros del club. Acá podrás cambiar la membresia de cada usuario.</p>
        <a class="btn btn-lg btn-outline-success" href="/cms/miembros" role="button">Miembros &raquo;</a>
      </div>
    </div>
  </div>
</section>
@endsection