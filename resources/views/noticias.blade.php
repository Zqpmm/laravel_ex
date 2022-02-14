@extends('layouts.main')

@section('title', '7news')

@section ('content')

    <div class="row" style="margin-top: 0%; margin-left: 3%;">
        <div style="margin-top: 5%; ">
            <h1 class="titulo">{{ $registro['titulo'] }}</h1>
            <h3 class="titulo2">{{ $registro['subtitulo'] }}</h3>         
            <h5 class="autor">Por: {{ $registro['autor'] }}</h5>                 
            <p class="linha"></p>
        </div>
        <div style="margin-top: 5%; max-width: 1200px;">
           <h3 class="conteudo">{{ $registro['conteudo-header'] }}</h3>         
        </div> 
        <div class="img" style="margin-top: 5%; margin-left: 80px;">
            <img src="{{ $registro['img'] }}">
        </div>
        <div style="margin-top: 5%; margin-bottom: 10%; align-items: center; max-width: 1200px;">
           <h3 class="conteudo">{{ $registro['conteudo-footer'] }}</h3>         
        </div> 
    </div>


@endsection