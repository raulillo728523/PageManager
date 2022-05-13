<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    h1 {
        text-align: center;
        margin-bottom: 30px;
        font-family: sans-serif;
    }

    .w-100{
        /* background: blue; */
        width: 100%;
    }

    .col-6{
        /* background: blue; */
        width: 50%;
        display: inline-block;
    }
    .col{
        /* background: blue; */
        width: 16%;
        display: inline-block;
    }
    .colf{
        background: blue;
        width: 16%;
    }
    .card{
        border: 1px solid gray;
        border-radius: 10px;
        margin-top: 5px;
    }
    .titulo{
        display: inline-block; 
        padding-left: 10px;
        width:80%;
    }
    .derecho{
        display: inline-block; 
        width:20%;
    }
    </style>
</head>
<body>
    <h1>Reporte</h1>

    <div class="col-6" >
        <h4>Busqueda:</h4>
        <h5>{{$busqueda}}</h5>
    </div>
    <div class="col" >
        <h4>Tipologia</h4>
        <h5>Articulos</h5>
    </div>
    <div class="col">
        <h4>Resultados</h4>
        <h5>{{$count}}</h5>
    </div>
    <div class="col">
        <h4>Resultados/día</h4>
        <h5>{{$count_today}}</h5>
    </div>
    <div class="w-100">
        <h3>Dominios</h3>
        @if ($data)
            {!! $data !!}
        @endif
    </div>

    <h4>Registros</h2>
    @foreach ($registros as $registro)
    <div class="card">        
        <div class="titulo">
            <p>{{ $registro->titulo }} - {{ $registro->lugar_extraccion }}</p>
        </div>
        <p style="padding-left: 10px">{{ $registro->texto }}</p>
        <p style="padding-left: 10px">Link: <br>{{ $registro->link }}</p>
    </div>
    @endforeach
</body>
</html>