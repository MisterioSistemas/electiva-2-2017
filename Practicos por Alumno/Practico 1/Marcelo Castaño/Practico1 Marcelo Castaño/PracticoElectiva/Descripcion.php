<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaPadre.php';
include_once './DAO/BLL/CategoriaPadreBLL.php';


include_once './DAO/DTO/Categoria.php';
include_once './DAO/BLL/CategoriaBLL.php';

$categoriaPadreBLL = new CategoriaPadreBLL();

$categoriaBLL = new CategoriaBLL();
$categoriaIdPadre = 0;

$juegoBLL = new JuegoBLL();
$id = 0;
$objJuego = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $objJuego = $juegoBLL->select($id);
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Juego</title>
        <meta charset="utf-8">
        <meta name="description" content="Plus E-Commerce Template">
        <meta name="author" content="Diamant Gjota" />
        <meta name="keywords" content="plus, html5, css3, template, ecommerce, e-commerce, bootstrap, responsive, creative" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--Favicon-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <!-- css files -->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />


        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />


        <link rel="stylesheet" type="text/css" href="css/animate.css" />


        <link rel="stylesheet" type="text/css" href="css/swiper.css" />

        <!-- this is default skin you can replace that with: dark.css, yellow.css, red.css ect -->
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/default.css" />

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">


        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- start topBar -->
        <div class="topBar" id="solonegro">
            <div class="container" >
                <ul class="topBarNav pull-right" id="espacio1">
                    <img src="img/iconosony.png"  alt="icono sony"/>
                </ul>
            </div><!-- end container -->
        </div>
        <!-- end topBar -->

        <div class="middleBar" id="fondoazul">
            <div class="container" id="tamaniologo">
<!--                <img src="img/logocabecera2.png" width="163" height="17"  alt="logo Principal"/>-->
                <img src="img/iconoplaystorenegro.png" alt=""/>

                <a href="index.php" id="espacio5">Editar<i class="glyphicon glyphicon-edit"></i></a>
            </div><!-- end container -->

        </div><!-- end middleBar -->

        <!-- start navbar -->
        <div class="navbar yamm navbar-default" id="fondoazul">
            <div class="container" style="margin-left: 80px;" >

                <div id="navbar-collapse-3" class="navbar-collapse collapse">

                    <?php
                    $listaCategoriasPadre = $categoriaPadreBLL->selectAll();

                    foreach ($listaCategoriasPadre as $objCategoriaPadre) {
                        $categoriaIdPadre = $objCategoriaPadre->getId();
                        ?>

                        <ul class="nav navbar-nav" id="espacio2" >


                            <li  class="dropdown active" ><a href="#" data-toggle="dropdown" class="dropdown-toggle"> <?php echo $objCategoriaPadre->getNombre(); ?> <i class="glyphicon glyphicon-chevron-right"></i> </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="home-v1.html"></a></li>
                                </ul><!-- end ul dropdown-menu -->

                            </li><!-- end li dropdown -->    





                        </ul>
                        <?php
                    }
                    ?>
                    <!-- end navbar-nav -->

                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div><!-- end navbar -->




        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Juego</h2>
                    <form action="abmJuego.php" method="post">

                        <div class="form-group">
                            <image  class="tamanoImagen" src="img/<?php echo $id; ?>.jpg" />
                        </div>
                        <div class="form-group">
                            <label>
                                Descripcion:
                            </label>
                            <label>
                                <?php
                                if ($objJuego != null) {
                                    echo $objJuego->getDescripcion();
                                }
                                ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                Precio:
                            </label>
                            <label>
                                <?php
                                if ($objJuego != null) {
                                    echo $objJuego->getPrecio();
                                }
                                ?>
                            </label>
                        </div>
                    </form>
                </div>
            </div>


        </div>

        <!-- Swiper slider-->

    </body>
</html>

