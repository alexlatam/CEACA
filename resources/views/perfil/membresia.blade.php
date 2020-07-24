@extends('perfil')


@section('head')
  <title>Ceaca | membresia</title>
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

                    @if(auth()->user()->plan->title == $plan->title)
                        <a class="btn btn-sm btn-success px-5 mt-2" style="background: grey; border: none; cursor: initial; color: #fff">Actual</a>
                    @else
                        <a href="#" class="btn btn-sm btn-success px-5 mt-2">Actuaizar membresia</a>
                    @endif

                </div>
            </div>
            <hr class="my-4">
            @endforeach
        </div>
    </div>
</div>

@endsection