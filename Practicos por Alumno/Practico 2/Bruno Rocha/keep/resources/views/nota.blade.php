<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Google Keep</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="orange lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <div class="row">
            <div class="col s3">
                <a id="logo-container" href="#" class="brand-logo black-text"><span><i class="fa fa-bars"aria-hidden="true"></i></span><span id="google">Google </span><span ID="keep">Keep</span></a>
            </div>
            <div class="col s6">
                <form id="form-buscador" method="GET" action="{{ action('NotaController@buscar') }}">
                    <div class="input-field">
                        <i class="material-icons prefix black-text">search</i>
                        <input id="buscador" name="buscador" class="black-text" type="text">
                        <label for="buscador" class="black-text">Buscar</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s10 m10 offset-m1">
                <div class="card white darken-1">
                    <div class="card-content black-text">
                        <form id="form-insertar" name="form-insertar" method="POST" action="{{Route('nota.store')}}">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                            {{ method_field('POST') }}
                            {!! csrf_field() !!}
                            <div class="input-field">
                                <input type="text" name="titulo" id="titulo">
                                <label for="titulo">Título</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="descripcion" id="descripcion">
                                <label for="descripcion">Descripción</label>
                            </div>
                            <input type="submit" id="btn-listo" name="btn-listo"
                                   class="waves-effect waves-teal btn-flat btn-listo" value="Listo">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="contenedor-tarjetas">
            @foreach($lista as $value)
                <div class="col s12 m4">
                    <div class="card white darken-1">
                        <div class="card-content black-text" id="{{$value["id"]}}">
                            <span class="card-title">{{$value["titulo"]}}</span>
                            <p> {{$value["descripcion"]}} </p>
                        </div>
                        <div class="card-action">
                            <form id="form-eliminar" name="form-eliminar" method="POST" action="{{ action('NotaController@destroy',$value["id"]) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <input id="btn-eliminar" type="submit" class="waves-effect waves-teal btn-flat btn-listo" value="Eliminar"/>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/init.js"></script>
<script src="/js/script.js"></script>

</body>
</html>
