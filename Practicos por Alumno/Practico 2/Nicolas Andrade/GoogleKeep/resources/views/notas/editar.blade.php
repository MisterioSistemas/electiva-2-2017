@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">NoteKeeper</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/notas">
                        {{ csrf_field() }}

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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>

                    <a href="/" class="btn btn-primary">
                        Cancelar
                    </a>


                </div>
            </div>
        </div>
    </div>


</div>
@endsection