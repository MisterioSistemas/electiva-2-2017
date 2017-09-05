<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaPadre.php';
include_once './DAO/BLL/CategoriaPadreBLL.php';


include_once './DAO/DTO/Categoria.php';
include_once './DAO/BLL/CategoriaBLL.php';

include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';

$categoriaPadreBLL = new CategoriaPadreBLL();
$juegoBLL = new JuegoBLL();
$categoriaBLL = new CategoriaBLL();
$categoriaIdPadre = 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plus - E-Commerce Template</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>



        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />


        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />


        <link rel="stylesheet" type="text/css" href="css/animate.css" />


        <link rel="stylesheet" type="text/css" href="css/swiper.css" />

        <!-- this is default skin you can replace that with: dark.css, yellow.css, red.css ect -->
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/default.css" />

        <!-- Google fonts -->
        <!--        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">-->



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

        <!-- Swiper slider-->


        <!-- start section -->
        <section >
            <div id="colortransparente">
                <div class="row" id="negrura">
                    <div class="col-sm-3 col-sm-offset-1 " id="mover">
                        <div class="title-wrap" id="mover" >
                            <h2 class="lead" id="titulo" >Games</h2>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->




                <div class="row column-4">
                    <?php
                    $listaJuegos = $juegoBLL->selectAll();

                    foreach ($listaJuegos as $objJuego) {
                        ?>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail store style3" id="fondonegro">
                                <div class="header">
                                    <div class="badges">
                                        <a href="Descripcion.php?id=<?php echo $objJuego->getId(); ?>" target="_blank">
                                            <image class="tamanioimg" src="img/<?php echo $objJuego->getId(); ?>.jpg" /></a>

                                    </div>


                                </div>
                                <div class="caption" >
                                    <h6 class="regular"  ><a href="shop-single-product-v1.html" id="letrablanca"><?php echo $objJuego->getNombre(); ?></a></h6>
                                    <div class="price">
                                        <span class="amount text-primary" id="letrablanca"><?php echo $objJuego->getPrecio(); ?></span>
                                    </div>
                                </div>
                                <!-- end caption -->
                            </div><!-- end thumbnail -->
                        </div><!-- end col -->
                        <?php
                    }
                    ?>


                </div><!-- end row -->


                <!-- start footer -->
                <footer class="footer light">
                    <div class="container">




                        <div class="row text-center">
                            <div class="col-sm-12">
                                <p class="text-sm">PlayStation <i class="fa fa-heart text-danger"></i> by <a href="https://store.playstation.com/#!/en-us/home/games">Network.</a></p>
                            </div><!-- end col -->
                        </div><!-- end row -->


                    </div><!-- end container -->
                </footer>
                <!-- end footer -->


                <!-- JavaScript Files -->
                <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                <script type="text/javascript" src="js/jquery.downCount.js"></script>
                <script type="text/javascript" src="js/nouislider.min.js"></script>
                <script type="text/javascript" src="js/jquery.sticky.js"></script>
                <script type="text/javascript" src="js/pace.min.js"></script>
                <script type="text/javascript" src="js/star-rating.min.js"></script>
                <script type="text/javascript" src="js/wow.min.js"></script>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                <script type="text/javascript" src="js/gmaps.js"></script>
                <script type="text/javascript" src="js/swiper.min.js"></script>
                <script type="text/javascript" src="js/main.js"></script>

                <!-- Initialize Swiper slide -->
                <script>
                    var swiperH = new Swiper('.swiper-coverflow', {
                        pagination: '.swiper-pagination',
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        paginationClickable: true,
                        effect: 'coverflow',
                        centeredSlides: true,
                        slidesPerView: 'auto',
                        loop: true,
                        coverflow: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: true
                        }
                    });
                </script>

                </body>
                </html>