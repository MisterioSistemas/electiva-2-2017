@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Personas</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Ciudad</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listaPersonas as $objPersona)
                            <tr>
                                <td>{{$objPersona["id"]}}</td>
                                <td>{{$objPersona["nombre"]}}</td>
                                <td>{{$objPersona["apellido"]}}</td>
                                <td>{{$objPersona["ciudad"]}}</td>
                                <td>{{$objPersona["edad"]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
