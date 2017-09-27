@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Keep</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/nota">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label for="titulo" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cuerpo') ? ' has-error' : '' }}">
                            <label for="cuerpo" class="col-md-4 control-label">Nota</label>

                            <div class="col-md-6">
                                <textarea id="cuerpo" type="text" class="form-control" name="cuerpo" value="{{ old('cuerpo') }}" required></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    @foreach($lista as $objNota)
                        <div class="panel-body col-xs-4 ">
                            <div class=" col-xs-offset-1 panel-item bg-warning">

                                <div id="tituloP"><strong>{{$objNota["titulo"]}}</strong></div>
                                <div id="cuerpoP" style="word-wrap: break-word">{{$objNota["cuerpo"]}}</div>
                                <div>
                                    <a href="/nota/edit/{{$objNota["id"]}}" class="btn btn-danger">Editar</a>
                                    <a href="/nota/{{$objNota["id"]}}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
