@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
@include('common.navbar')

<style>
    .container_iframe {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .iframe_revista {
        width: 100%;
        height: 100%;
    }

    .hidden1 {
        position: absolute;
        width: 98.6%;
        height: 8.5%;
        top: 0;
        background-color: #fff;
        z-index: 2;
    }

    .hidden2 {
        position: absolute;
        width: 98%;
        height: 91.5%;
        bottom: 0;
        z-index: 2;
    }
</style>

<section class="mt-5 pt-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>
                    {{ $revista->titulo }}
                </h4>
                <div class="container_iframe">
                    <div class="hidden1"></div>
                    <div class="hidden2"></div>
                    <iframe class="iframe_revista" src="{{asset('revista/'. $revista->archivo )}}" id="revista"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
        <a href="#" id="{{ $revista->id }}" class="btn btn-sm btn-success px-5 mt-2 descargar_button" data-toggle="modal" data-target=".modalRevista">Descargar</a>
        </div>
    </div>
</section>
<script type='text/javascript'>
    document.oncontextmenu = function() {
        return false
    }
</script>
@include('home.modal_revista')

@endsection