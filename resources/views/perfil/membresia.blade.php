@extends('perfil')


@section('head')
  <title>Dashboard | membresia</title>
@endsection

@section('content')
<div class="container section pb-0">
    <div class="row">
        <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
            <h6 class="title">
                Nuestras membresias
            </h6>
        </div>
        <div class="col-12 col-md-9 col-lg-10 order-md-1">
            @foreach ($planes as $plan)
            <div class="row align-items-center text-nounderline">
                <div class="col-12 col-md-3">
                    <img src="{{asset('img/membresias/'. $plan->imagen )}}" alt="{{ $plan->title }}" class="img-fluid mb-3 mb-md-0">
                </div>
                <div class="col-12 col-md-9">
                    <h4>
                        {{ $plan->title }}
                    </h4>
                </div>
            </div>
            <hr class="my-4">
            @endforeach
        </div>
    </div>
</div>

@endsection