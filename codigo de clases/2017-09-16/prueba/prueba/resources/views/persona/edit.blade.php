@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar un usuario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ action('PersonaController@update',$id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required value="{{$objPersona["nombre"]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-md-4 control-label">Apellido:</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" required  value="{{$objPersona["apellido"]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-md-4 control-label">Ciudad:</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" required  value="{{$objPersona["ciudad"]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-md-4 control-label">Edad:</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad" required  value="{{$objPersona["edad"]}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar Usuario
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
