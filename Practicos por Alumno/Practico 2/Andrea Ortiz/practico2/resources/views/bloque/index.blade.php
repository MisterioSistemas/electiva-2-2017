@extends('layouts.prueba')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">


                        <form  class="form-horizontal"  method="POST" action="{{ route('bloque.store') }}">
                        {{ csrf_field() }} <!--nos pone el token, para evitar que se envien cosas al formulario, algo asi como el cachtchap-->

                        <div class="formulario mdl-cell mdl-cell--3-col mdl-cell--6-col-tablet">
                            <div class="mdl-textfield mdl-js-textfield mdl-typography--font-black">
                                <input class="mdl-textfield__input" type="text" id="titulo" name="titulo">
                                <label class="mdl-textfield__label" for="titulo">Titulo</label>
                            </div>

                            <br>

                            <div class="otraletra mdl-textfield mdl-js-textfield "  >
                                <input class="mdl-textfield__input" type="text" id="descripcion" name="descripcion">
                                <label class="mdl-textfield__label" for="descripcion">Tomar una nota</label>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        <b>Listo</b>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>




                        <div id="todosLosBloques" class="section-grid mdl-grid">
                            @foreach($listaBloques as $objBloque)
                                <div id="section-{{$objBloque["id"]}}" class="formulario2 mdl-cell mdl-cell--3-col mdl-cell--6-col-tablet">
                                    <h3>{{$objBloque["titulo"]}}</h3>
                                    <p>{{$objBloque["descripcion"]}}</p>

                                    <a href="#" class="mdl-button mdl-button--icon mdl-button--colored"><i style="background:  #FAFAFA;
    color:#747474;" class="material-icons">person_add</i></a>
                                    <a href="#" class="mdl-button mdl-button--icon mdl-button--colored"><i style="background:  #FAFAFA;
    color:#747474;" class="material-icons">palette</i></a>
                                    <a href="#" class="mdl-button mdl-button--icon mdl-button--colored"><i style="background:  #FAFAFA;
    color:#747474;" class="material-icons">panorama</i></a>
                                    <a href="#" class="mdl-button mdl-button--icon mdl-button--colored"><i style="background:  #FAFAFA;
    color:#747474;" class="material-icons">archive</i></a>
                                    <a href="{{action('BloqueController@edit',$objBloque['id'])}}" class="mdl-button mdl-button--icon mdl-button--colored"><i style="background:  #FAFAFA;
    color:#747474;" class="material-icons">mode_edit</i></a>
                                    <form method="post" class="iconos mdl-button mdl-button--icon mdl-button--colored"
                                          action="{{ action('BloqueController@destroy',$objBloque['id']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit"><i style="background:  #FAFAFA;
                                        color:#747474; border-style: none; " class="material-icons">delete</i></button>
                                    </form>
                                </div>
                            @endforeach

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
