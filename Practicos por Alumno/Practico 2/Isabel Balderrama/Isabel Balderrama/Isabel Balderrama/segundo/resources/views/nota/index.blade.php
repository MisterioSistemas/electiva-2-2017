@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="/nota" class="btn btn-primary">Nuevo</a>
        <div class="col-md-8 col-md-offset-2">
            {{ csrf_field() }} 
            <!--    -->
            @foreach($notas as $objNotas)
            <div class="panel panel-default">                
                <div class="panel-heading">
                    <label>{{$objNotas['titulo']}}</label>  
                    <div class="btn-group">
                        <a href="/nota" class="btn btn-primary">Nuevo</a>
                        <a href="{{action('NotaController@edit',$objNotas["id"])}}" class="btn btn-default">Editar</a>
                        <!--<a href="/nota/edit/{id}">Editar</a>-->
                        <a> 
                            <form method="POST" action="{{action('NotaController@destroy',$objNotas["id"]) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <input type="submit" value="Eliminar" class="btn btn-danger"/>
                            </form>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div>
                        <p>    {{$objNotas['descripcion']}}  </p>
                    </div>                  
                </div>               
            </div>
            @endforeach
            <!--    --> 
        </div>
    </div>
</div>
@endsection
