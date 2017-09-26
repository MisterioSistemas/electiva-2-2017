@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Notas</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('nota.store') }}">
                    {{ csrf_field() }} <!--nos pone el token, para evitar que se envien cosas al formulario, algo asi como el cachtchap-->


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



                  <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Titulo</th>
                          <th>Descripcion</th>
                            <th></th>
                            <th></th>

                        </tr>
                      </thead>

                      <tbody>
                      <!--al ser blade, entonces se puede usar codigo php sin poner la etiqueta php-->
                      @foreach($listaNotas as $objNota)
                          <tr>
                              <!--las llaves llaves son el hecho de php-->
                              <td>{{$objNota["id"]}}</td>
                              <td>{{$objNota["titulo"]}}</td>
                              <td>{{$objNota["descripcion"]}}</td>
                              <td><a href="{{action('NotaController@edit',$objNota['id'])}}">Editar</a></td>
                              <td> <form method="post" action="{{ action('NotaController@destroy',$objNota['id']) }}">
                                      {{ csrf_field() }}
                                      <input type="hidden" name="_method" value="DELETE" >
                                      <input type="submit" class="btn btn-danger" value="eliminar">
                                  </form>
                              </td>


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
