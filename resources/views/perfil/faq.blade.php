@extends('perfil')


@section('head')
  <title>Ceaca | Tópicos</title>
@endsection

@section('content')
<div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Tópicos
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                <div class="list-group" id="list-tab" role="tablist">
                    @foreach ($topicos as $topico)
                        <a class="list-group-item  d-flex justify-content-between align-items-center list-group-item-action"  href="faq/{{$topico->id}}" role="tab" aria-controls="settings">
                            {{$topico->topico}}
                            <span class="badge badge-primary badge-pill">{{count($topico->faqs)}}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    

    

@endsection