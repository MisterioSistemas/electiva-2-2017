
<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/acjue.php';
include_once './DAO/BLL/acjueBLL.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>
        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


        <?php
        $catGlobalBLL = new acjueBLL();
        if (isset($_REQUEST['editar'])) {

            $acjueNomb = $_REQUEST['acjueNomb'];
            $acjueJjue = $_REQUEST['acjueJjue'];
            $acjueDesc = $_REQUEST['acjueDesc'];
            $acjuePrec = $_REQUEST['acjuePrec'];
            $catGlobalBLL->update($acjueJjue, $acjueNomb, $acjuePrec, $acjueDesc);
            
        } else if (isset($_REQUEST['nuevo'])) {

            $acjueNomb = $_REQUEST['acjueNomb'];
            $acjueJjue = $_REQUEST['acjueJjue'];
            $acjueDesc = $_REQUEST['acjueDesc'];
            $acjuePrec = $_REQUEST['acjuePrec'];
            $catGlobalBLL->insert($acjueJjue, $acjueNomb, $acjuePrec, $acjueDesc);
            
        } else if (isset($_REQUEST['eliminar'])) {

            $accatCcatedit = $_REQUEST['accatCcat'];
            
            $acjueJjue = $_REQUEST['acsjueJjue'];
            $catGlobalresult = $catGlobalBLL->deleteJxC($acjueJjue);
            $catGlobalresult = $catGlobalBLL->delete($acjueJjue);
        } else if (isset($_REQUEST['cancelar'])) {
           
            $acjueJjue = $_REQUEST['acsjueJjue'];
            $catGlobalresult = $catGlobalBLL->deleteJxC($acjueJjue);
        }else{
            echo "ERROR";
        }
        ?>

    </head>
    <body class="homepage">
        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-4">

                            <a class="navbar-brand" href="index.php"><img style="max-width: 100%; height: 50px;" src="images/svgLogo.png" alt="logo"></a>
                        </div>
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fa fa-desktop" title="ADMIN"></i></a></li>
                                </ul>
                                <div class="search">
                                    <form role="form">
                                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

        </header><!--/header-->
        <section id="feature">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="container"> 
                            <div class="row" style="height: 610px;" >
                                <div style="padding-top: 20px"> 
                                    <div class="col-md-12">

                                        <a href="addjuegos.php?nuevo=nuevo" type="button" name="nuevo" id="nuevo" class="btn btn-primary btn-lg">Nueva Juego</a>
                                        <table id="user_data" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>PRECIO</th>
                                                    <th>DESCRIPCION</th>
                                                    <th></th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$acjueBLLTable = new acjueBLL();
$ListaAcjue = $acjueBLLTable->selectAll();
?>

                                                <?php
                                                foreach ($ListaAcjue as $value) {
                                                    ?>
                                                    <tr>
                                                        <td> <?php echo $value->getAcjueJjue(); ?></td>
                                                        <td> <?php echo $value->getAcjueNomb(); ?></td>
                                                        <td> <?php echo $value->getAcjuePrec(); ?></td>
                                                        <td> <?php echo $value->getAcjueDesc(); ?></td>
                                                        <th> <a href="addjuegos.php?acjueJjue=<?php echo $value->getAcjueJjue(); ?>&eliminar=editar" type="button" name="editar" id="" class="btn btn-warning btn-sm">Editar</a></th>
                                                        <th> <a <a href="addjuegos.php?acjueJjue=<?php echo $value->getAcjueJjue(); ?>&eliminar=eliminar" type="button" name="eliminar" id="" class="btn btn-danger btn-sm">Eliminar</a></th>
                                                    </tr>  
    <?php
}
?>

                                            </tbody>
                                        </table>
                                    </div>



                                </div>

                            </div></div>
                    </div><!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 <a target="_blank" href="http://www.facebook.com/" title="Free Miguel Angel">Miguel Angel</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>
