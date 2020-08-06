@extends('perfil')


@section('head')
  <title>Ceaca | Tópicos</title>
@endsection

@section('content')
<div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    {{$topico->topico}}
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @if (count($faqs)>0)
                    <div class="row mx-2">
                        <div class="ml-auto">
                            Deseo <a href="faq">volver</a>   
                        </div>
                    </div>
                    <div class="faq">
                        @php
                            $c = 0;
                        @endphp
                        @foreach ($faqs as $faq)
                        @php
                            $c++;
                        @endphp    
                            <!-- Item -->
                            <div class="faq-item">
                                <!-- Heading -->
                                <a href="#faq-item-content-{{$c}}" class="faq-item-heading" data-toggle="collapse" aria-controls="faq-item-content-{{$c}}" aria-expanded="false" role="button">
                                    {{$faq->titulo}}
                                </a>
                            <!-- Content -->
                            <div class="faq-item-content collapse" id="faq-item-content-{{$c}}">
                                <div class="faq-item-content-inner">
                                <p class="mb-0">
                                {{$faq->cuerpo}}
                                </p>
                                </div>
                            </div>
                            </div>
            

                        @endforeach
                    
                    </div>
                   
                @else
                    Sin contenido, regrese a los  <a href="faq">tópicos de Preguntas frecuentes</a>.                    
                @endif
            </div>
        </div>
    </div>
</div>

    

    

@endsection