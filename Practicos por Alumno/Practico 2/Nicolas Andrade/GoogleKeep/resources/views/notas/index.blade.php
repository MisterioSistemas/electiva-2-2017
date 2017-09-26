@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Notas
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/notas">
                            {{ csrf_field() }}

                            <div>
                                <input id="buscar" type="text" class="form-control" placeholder="BUSCAR NOTA"></input>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nota" class="col-md-4 control-label">Nota</label>

                                <div class="col-md-6">
                                    <textarea id="nota" type="text" class="form-control" name="nota" value="{{ old('nota') }}" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>

                        @foreach($lista as $objNota)
                            <div class="panel-body col-xs-4">
                                <div class=" col-xs-offset-1 panel-item bg-warning">

                                    <h2 id="titulo" class="col-md-offset-3"><strong>{{$objNota["titulo"]}}</strong></h2>
                                    <h3 id="nota" class="col-md-offset-3" style="word-wrap: break-word">{{$objNota["texto"]}}</h3>
                                    <div>
                                        <a href="/notas/edit/{{$objNota["id"]}}" class="col-md-offset-2 col-xs-3 btn btn-primary">Editar</a>
                                        <a href="/notas/{{$objNota["id"]}}" class="col-md-offset-1 btn btn-danger">Eliminar</a>
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