
<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/accat.php';
include_once './DAO/BLL/accatBLL.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Nueva Categorias</title>
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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
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

                                            <form class="form-horizontal" method="POST" action="categorias.php" role="form" >

                                            <?php
                                            $catGlobalBLL = new accatBLL();
                                            if (isset($_REQUEST["editar"])) {

                                                $global = $_REQUEST["editar"];
                                                ?>
                                                <input type="hidden" name="<?php echo $global ?>" value="<?php echo $global ?>">
                                                <?php
                                            } else if (isset($_REQUEST["nuevo"])) {
                                                $global = $_REQUEST["nuevo"];
                                                ?>
                                                <input type="hidden" name="<?php echo $global ?>" value="<?php echo $global ?>">
                                                <?php
                                            } else {
                                                echo "error";
                                            }
                                            ?>
                                            <?php
                                            if (isset($_REQUEST['editar'])) {

                                                $catGlobalBLL = new accatBLL();
                                                $idacjuetEdit = $_REQUEST["accatCcat"];

                                                $objacjue = $catGlobalBLL->select($idacjuetEdit);
                                                ?>                               

                                                <div class="form-group">
                                                    <label for="accatCcat" class="col-lg-2 control-label">ID</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control"  name="accatCcat" value="<?php echo $_REQUEST["accatCcat"]; ?>"
                                                               placeholder="ID" readonly="true">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="accatNomb" class="col-lg-2 control-label">NOMBRE</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control"value="<?php echo $objacjue->getAccatNomb() ?>" name="accatNomb" 
                                                               placeholder="Nombre de la categoria">
                                                    </div>
                                                </div>

                                                <div class="form-group" id="categoriapadre">
                                                    <label for="accatCpad" class="col-lg-2 control-label">CATEGORIA PADRE</label>
                                                    <div class="col-lg-10">
                                                        <select  class="form-control"  id="accatCpad" name="accatCpad" > 

                                                            <?php
                                                            $categoriasBLL = new accatBLL();
                                                            $categoriasPadres = $categoriasBLL->selectAccatPad();
                                                            ?>
                                                            <?php
                                                            foreach ($categoriasPadres as $value) {
                                                                ?>

                                                                <option value="<?php echo $value->getAccatCcat(); ?>"><?php echo $value->getAccatNomb(); ?></option> 

                                                                <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                    <label for="accatCpad" class="col-lg-2 control-label">CATEGORIA ES PADRE?</label>
                                                    <div class="col-lg-10">


                                                        <label class="radio-inline"><input class="des" type="radio" name="padre" id="padre" checked value="1">Si</label>
                                                        <label class="radio-inline"><input class="des" type="radio" name="padre" id="padre"  value="0">No</label>

                                                    </div>
                                                </div>
                                                <?php
                                            } else if (isset($_REQUEST['nuevo'])) {
                                                $global = $_REQUEST['nuevo'];
                                                ?>
                                                <div class="form-group">
                                                    <label for="accatCcat" class="col-lg-2 control-label">ID</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="accatCcat" value="0"
                                                               placeholder="ID" readonly="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="accatNomb" class="col-lg-2 control-label">NOMBRE</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="accatNomb" name="accatNomb"
                                                               placeholder="Contraseña">
                                                    </div>
                                                </div>

                                                <div class="form-group" id="categoriapadre">
                                                    <label for="accatCpad" class="col-lg-2 control-label">CATEGORIA PADRE</label>
                                                    <div class="col-lg-10">
                                                        <select  class="form-control"  id="accatCpad" name="accatCpad" > 

                                                            <?php
                                                            $categoriasBLL = new accatBLL();
                                                            $categoriasPadres = $categoriasBLL->selectAccatPad();
                                                            ?>
                                                            <?php
                                                            foreach ($categoriasPadres as $value) {
                                                                ?>

                                                                <option value="<?php echo $value->getAccatCcat(); ?>"><?php echo $value->getAccatNomb(); ?></option> 

                                                                <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                    <label for="accatCpad" class="col-lg-2 control-label">CATEGORIA ES PADRE?</label>
                                                    <div class="col-lg-10">


                                                        <label class="radio-inline"><input class="des" type="radio" name="padre" checked  value="1">Si</label>
                                                        <label class="radio-inline"><input class="des" type="radio" name="padre" value="0">No</label>

                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                echo "error";
                                            }
                                            ?>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-default">Registrar</button>
                                        </div>
                                    </div>
                                    </form>

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
                        <img
                            >
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
    <script src="js/addventares.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>  
</body>
</html>
