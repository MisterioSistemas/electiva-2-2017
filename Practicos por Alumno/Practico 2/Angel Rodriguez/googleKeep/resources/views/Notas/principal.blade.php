<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pacial Nro 1, Juan Angel Rodriguez M.</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--  <link rel="stylesheet" href="/resources/demos/style.css">-->



        <style>

            .column {
                width: 200px;
                float: left;
                padding-bottom: 100px;
            }
            .portlet {
                margin: 0 1em 1em 20px;
                padding: 0.3em;
            }
            .portlet-header {
                padding: 0.2em 0.3em;
                margin-bottom: 0.5em;
                position: relative;
            }
            .portlet-toggle {
                position: absolute;
                top: 50%;
                right: 0;
                margin-top: -8px;
            }
            .portlet-content {
                padding: 0.4em;
            }
            .portlet-placeholder {
                border: 1px dotted black;
                margin: 0 1em 1em 0;
                height: 50px;
            }
        </style>

        <script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
        <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/demo.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/chartist.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/material-dashboard.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap-notify.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/demo.js')}}" type="text/javascript"></script>


        <script>
            $(function() {
            $(".column").sortable({
            connectWith: ".column",
                    handle: ".portlet-header",
                    cancel: ".portlet-toggle",
                    placeholder: "portlet-placeholder ui-corner-all"
            });
            $(".portlet")
                    .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
                    .find(".portlet-header")
                    .addClass("ui-widget-header ui-corner-all")
                    .prepend("<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
            $(".portlet-toggle").on("click", function() {
            var icon = $(this);
            icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
            icon.closest(".portlet").find(".portlet-content").toggle();
            });
            });
        </script>


    </head>
    <body>

        <div class="wrapper">

            <div class="sidebar" data-color="green" data-image="">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
                -->

                <div class="logo" style="background-color: #fb0">
                    <a href="#" class="simple-text">
                        <b>Angel</b> Keep
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="dashboard.html">
                                <i class="material-icons">home</i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="table.html" data-toggle="modal" data-target="#myModal">
                                <i class="material-icons">content_paste</i>
                                <p>Nueva Nota</p>
                            </a>
                        </li>
                        <li>
                            <a href="user.html">
                                <i class="material-icons">person</i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute" style="background-color: #fb0">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Material Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">dashboard</i>
                                        <p class="hidden-lg hidden-md">Dashboard</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">5</span>
                                        <p class="hidden-lg hidden-md">Notifications</p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Categoria notas 1</a></li>
                                        <li><a href="#">Categoria notas 2</a></li>
                                        <li><a href="#">Categoria notas 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                </li>
                            </ul>

                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group  is-empty">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="material-input"></span>
                                </div>
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i><div class="ripple-container"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>

                <!--Aqui va el contenido-->
                
                <script type="text/javascript">
  function verNota(idNota) {
        
       
            $.ajax({
                method: 'GET',
                url: "principal/"+idNota+"/edit",
                success: function (data) {
                   console.log(data);
            
                    var objNota = data;
                    
                  // console.log(objNota.titulo);
                    
                    $('#contenidoEdit').text(objNota.contenido);
                    $('#tituloEdit').text(objNota.titulo);
                    $('#id_nota').value(objNota.id);
//                    $('#resultado').html('<span>' + data + '</span>');
                }
            })
        
    }
</script>
                
                
                
                
                <div class='content'>
                    <!--<div class="container-fluid">-->
                        <br>
                        <div class="row">
                           
                            
                            @foreach($listaNotas as $objNota)
                            
                            <div class="column col-md-3 ">
                                <div class="portlet card">
                                    <div class="portlet-header card-header" data-background-color="green">
                                        <h4 class="title">{{$objNota["titulo"]}}</h4>
                                    </div>
                                    <div class="portlet-content card-content">
                                        <h4 class="title">{{$objNota["titulo"]}}</h4>
                                        <p class="category">{{$objNota["contenido"]}}</p>
                                    </div>
                                    <div class="card-footer form-horizontal">
                                        <div class="stats">
                                       
                                        
                                            <button id="btnEdit" onclick="verNota({{$objNota['id']}})" action="{{action('NotaController@edit',$objNota['id'])}}"><i class="material-icons" style=" color: #006699" data-toggle="modal" data-target="#myModalEdit">edit</i></button>
                                     
                                            <i></i>
                                        </div>
                                        <div class="stats">
                                             <form method="POST" action="{{ action('NotaController@destroy',$objNota['id']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button><i class="material-icons button" style=" color: #cc0000" type="submit">delete</i></button>
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                            
                          
                        </div>


                        <input class="input" onclick="demo.showNotification('top', 'center')">Top Center<div class="ripple-container"></div></input>

                    </div>




                    <footer class="footer">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <p class="copyright pull-right">
                                &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Juan Angel Rosriguez</a>, Parcial Nro 1, Electiva de Programacion
                            </p>
                        </div>
                    </footer>
                </div>
            </div>

            <!-- Modals para la creacion de las Notas-->
            
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <form class="form-horizontal" method="POST" action="{{ route('principal.store') }}">
                        {{ csrf_field() }}
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header row">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="col-md-8">
                            <input id="titulo" name="titulo" class="form-control" placeholder="Inserte el TÍTULO" required="true"><h4 class="modal-title" id="myModalLabel"></h4></input>
                            </div>
                        </div>
                        <div class="modal-body row">
                            
                            <div class="col-md-8">
                                <textarea id="contenido" name="contenido" type="text" class="form-control" name="contenido" required="true" placeholder="Inserte el CONTENIDO de la nota aqui:"></textarea>
                            </div>

                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            
            <!-- Terminan los Modals de creacion -->
            
            
 
            <!-- Modals para Editar de las Notas-->
            

            
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    
                        <input type="hidden" id="id_nota" name="id_nota"/>
                <div class="modal-dialog" role="document">
                    <input hidden="true" id='idNota' name='idNota'/>
                    <div class="modal-content">
                        <div class="modal-header row">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="col-md-8">
                                <textarea id="tituloEdit" name="tituloEdit" type="text" class="form-control" required="true"><h4 class="modal-title" id="myModalLabel"></h4></textarea>
                            </div>
                        </div>
                        <div class="modal-body row">
                            
                            <div class="col-md-8">
                                <textarea id="contenidoEdit" name="contenidoEdit" type="text" class="form-control" required="true"></textarea>
                            </div>

                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
               
            </div>

            <!-- Terminan los Modals de Edcion -->
            
        






    </body>


</html>
