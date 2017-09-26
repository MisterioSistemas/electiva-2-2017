
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nahim Keep</title>
        <!--<script src="{{ asset('bootstrap2/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>

        <script src="{{ asset('bootstrap2/js/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap2/js/tether.min.js') }}" type="text/javascript"></script>
        <link href="{{ asset('bootstrap2/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"/>
        <script src="{{ asset('bootstrap2/js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/notaJS.js') }}"></script>

        <!-- Bootstrap core CSS -->        
        <!--<link href="../../bootstrap2/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Custom styles for this template -->
        <!--<link href="bootstrap2/css/shop-homepage.css" rel="stylesheet">-->

    </head>

    <body>




        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Nahim Keep</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                        
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control"  id="prueba" placeholder="Search...">
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4"> Notas en la nube </h1>
                    <div class="list-group">
                        <a href="agregar" class="list-group-item" data-toggle="modal" data-target="#flipFlopNuevo">Agregar</a>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">


                    <div class="row notas ">

                        @foreach($listaNotas as $objNota)

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href ={{"#flipFlop".$objNota["id"]}}    data-toggle="modal"  data-target={{"#flipFlop".$objNota["id"]}}
                                           >{{ $objNota["titulo"]}}</a>
                                    </h4>
                                    <p class="card-text">{{$objNota["descripcion"]}}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#"  data-toggle="modal"  data-target={{"#flipFlop".$objNota["id"]}} >editar </a>
                                    <a  href="#" id="borrar" onclick='borrar({{$objNota["id"]}})' >Borrar</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id={{"flipFlop".$objNota["id"]}} tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4  contenteditable="true" class="modal-title" id={{"titulo".$objNota["id"]}} >{{ $objNota["titulo"]}}</h4>
                                    </div>
                                    <textarea id={{"descripcion".$objNota["id"]}}>{{$objNota["descripcion"]}}</textarea>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal" id="FinalizarNuevo" onclick='editar({{$objNota["id"]}})'>Finalizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Nahim Modal -->
        <!--        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#flipFlop">
                    Click Me
                </button>-->
        <!--        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#flipFlop2">
                    Click Me 2
                </button>-->
        <!--
                <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="modalLabel">Flip-flop</h4>
                            </div>
                            <input
                                type="text" class=" modal-body" id="prueba">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>-->
        <div class="modal fade" id="flipFlopNuevo" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4  contenteditable="true" class="modal-title" id="titulonuevo">Titulo</h4>
                    </div>
                    <textarea id="descripcionnuevo">Descripcion de la nota</textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="agregar()" id="FinalizarNuevo">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nahim Modal Termina -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Nahim Terrazas 2017</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
    <!--    <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->

    </body>

</html>
