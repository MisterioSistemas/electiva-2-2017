<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';

$JuegoBLL = new JuegoBLL();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Segundo Practico - Juan Angel Rodriguez</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/personalizado.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

    </head>

    <body class='bg-fondo123'>

        <!-- Navigation -->

        <div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container logo">
                <p>
                    <img src="img/sony.png"/>
                </p>
            </div>
        </div>
        <hr>
        <div class="navbar navbar-expand-lg navbar-dark bg-play">

            <div class="container">
                <img src="img/logo.png"/>
            </div>
        </div>
        <hr>
        <nav class="navbar navbar-expand-lg navbar-dark bg-play2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav nav-pills">
                        <li role="presentacion" style="margin-right: 25px;">
                            <span style="color: white">Exclusivamente para tí   </span>  
                        </li>
                        <li role="presentation" class="dropdown">
                            <a style="color:whitesmoke" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categoria 1 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu ">
                                
                                <li><a href="#">Clase1</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a style="color:whitesmoke" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categoria 2 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="#">Clase1</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a style="color:whitesmoke" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categoria 3 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="#">Clase1</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a style="color:whitesmoke" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categoria 4 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="#">Clase1</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="container bg-contenido">
            <div class='panel-heading' style="padding-bottom: 25px; padding-top: 25px; background-color: #001740; margin-top: 20px; ">
        <h1 style="color: #ffffff; margin-left: 20px">Juegos</h1>
        </div>
            <div class="row">

                <div class="col-lg-3">

                    
                    <div class="list-group">
                        <a href="#" class="list-group-item" style="color: white">Category 1</a>
                        <a href="#" class="list-group-item" style="color: white">Category 2</a>
                        <a href="#" class="list-group-item" style="color: white">Category 3</a>
                        <a href="#" class="list-group-item" style="color: white">Category 4</a>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div class="row">
                        <?php
                        $listaJuegos = $JuegoBLL->selectAll();

                        foreach ($listaJuegos as $objJuegos) {
                            ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="<?php echo $objJuegos->getImagen(); ?>" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $objJuegos->getNombre(); ?></a>
                                        </h4>
                                        <h5>.$<?php echo $objJuegos->getPrecio(); ?></h5>
                                        <p class="card-text" style="overflow:hidden;white-space:nowrap;text-overflow:ellipsis;"><?php echo $objJuegos->getDescripcion(); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Item Two</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Item Three</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Item Four</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Item Five</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Item Six</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>
