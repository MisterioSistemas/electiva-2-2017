@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar una nota</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ action('NotaController@update',$id) }}">
                        {{ csrf_field() }} <!--nos pone el token, para evitar que se envien cosas al formulario, algo asi como el cachtchap-->
                        <input type="hidden" name="_method" value="PATCH" >

                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text" class="form-control" name="titulo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="col-md-4 control-label">Descripcion</label>

                                <div class="col-md-6">
                                    <input id="descripcion" type="text" class="form-control" name="descripcion" required>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
