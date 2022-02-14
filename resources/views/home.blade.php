@extends('layouts.main')

@section('title', '7news')

@section ('content')

    <?php 
        date_default_timezone_set('America/Sao_Paulo');
        $data_atual = date('d/m/Y');
    ?>

    <div class="row" style="margin-top: 0%; margin-left: 3%;">
            <div style="margin-top: 5%;">
                <p style="position: absolute; width: 10px; margin-top: 5px;  height: 23px; background: #286E84;"></p>
                <h2 style="color: #2D2929; margin-left: 15px; font-size: 30px;">Últimas notícias</h2>
            </div>

            <h2 style="margin-top: 3%; font-weight: bold;"><?php echo $data_atual ?></h2>
            @foreach($noticias as $noticia)

                <div class="card" style="background-color: #f5f5f5; max-width: 750px; margin-top: 0%; margin-bottom: 2%; margin-left: 11px;">
                    <a href='/noticias/{{ $noticia->id }}'>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $noticia->img }}" class="img-fluid rounded-start" style="height: 100%; margin-left: -10px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="btn btn-primary float-end" style="margin-right: -20px; margin-top: -10px;">{{ $noticia->categoria }}</p>                                    
                                    <h5 class="card-title" style="margin-top: 4%;">{{ $noticia->titulo }}</h5>
                                    <p class="card-text position-absolute bottom-0 end-0" style="margin-right: 10px;"><small class="text-muted">Criado por: {{ $noticia->autor }}</small></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            
            @endforeach

    </div>
    
@endsection