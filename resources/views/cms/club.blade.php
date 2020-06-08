@extends('cms')


@section('content')
<section>
  <h2>Usuarios del club</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($subscriptores as $subscriptor)
          <tr>
            <td>{{$subscriptor->id}}</td>
            <td>{{$subscriptor->email}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endsection