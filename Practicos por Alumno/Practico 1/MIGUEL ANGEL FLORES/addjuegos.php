
<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/acjue.php';
include_once './DAO/BLL/acjueBLL.php';
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

                                        <form class="form-horizontal" method="POST" action="juegos.php" role="form" >

                                            <?php
                                            $catGlobalBLL = new acjueBLL();
                                            if (isset($_REQUEST["editar"])) {

                                                $global = $_REQUEST["editar"];
                                                ?>
                                                <input type="hidden" name="<?php echo $global ?>" value="<?php echo $global ?>">
                                                <?php
                                            } else if (isset($_REQUEST["nuevo"])) {
                                                $global = $_REQUEST["nuevo"];

                                                $idacjueUltimo = $catGlobalBLL->selectMaxAcjueJjue();
                                                ?>
                                                <input type="hidden" name="<?php echo $global ?>" value="<?php echo $global ?>">
                                                <?php
                                            } else {
                                                echo "error";
                                            }
                                            ?>
                                            <?php
                                            if (isset($_REQUEST['editar'])) {

                                                $catGlobalBLL = new acjueBLL();
                                                $idacjuetEdit = $_REQUEST["accatJjue"];

                                                $objacjue = $catGlobalBLL->select($idacjuetEdit);
                                                ?>                               

                                                <div class="form-group">
                                                    <label for="accatCcat" class="col-lg-2 control-label">ID</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control"  name="accatJjue" value="<?php echo $_REQUEST["accatJjue"]; ?>"
                                                               placeholder="ID" readonly="true">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="accatNomb" class="col-lg-2 control-label">NOMBRE</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control"value="<?php echo $objacjue->getAcjueNomb() ?>" name="acjueNomb" 
                                                               placeholder="Nombre del juego">
                                                    </div>
                                                </div>                                            
                                        </div>                                                                                            
                                        <div class="form-group">

                                            <label for="acjuePrec" class="col-lg-2 control-label">PRECIO</label>
                                            <div class="col-lg-10">
                                                <input type="number" class="form-control" id="acjuePrec" name="acjuePrec"
                                                       placeholder="Precio" value="<?php echo $objacjue->getAcjuePrec() ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="acjueDesc" class="col-lg-2 control-label">DESCRIPCION</label>
                                            <div class="col-lg-10">
                                                <textarea type="tex" class="form-control" id="acjueDesc" name="acjueDesc" placeholder="Descripcion"><?php echo $objacjue->getAcjueDesc() ?></textarea>
                                            </div>
                                        </div>
                                        <?php
                                    } else if (isset($_REQUEST['nuevo'])) {
                                        $global = $_REQUEST['nuevo'];
                                        ?>
                                        <div class="form-group">
                                            <label for="acjueJjue" class="col-lg-2 control-label">ID</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="acjueJjue" name="acjueJjue" value ="<?php echo $idacjueUltimo->getAcjueJjue() ?>"
                                                       placeholder="ID" readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="acjueNomb" class="col-lg-2 control-label">NOMBRE</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="accatNomb" name="acjueNomb"
                                                       placeholder="NOMBRE">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="acjuePrec" class="col-lg-2 control-label">PRECIO</label>
                                            <div class="col-lg-10">
                                                <input type="number" class="form-control" id="acjuePrec" name="acjuePrec"
                                                       placeholder="Precio">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="acjueDesc" class="col-lg-2 control-label">DESCRIPCION</label>
                                            <div class="col-lg-10">
                                                <textarea type="tex" class="form-control" rows="9" id="acjueDesc" name="acjueDesc"placeholder="Descripcion"></textarea>
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
                                        <a href="juegos.php?cancelar=cancelar&acjueJjue=<?php echo $idacjueUltimo->getAcjueJjue() ?>" class="btn btn-danger">Cancelar</a>
                                        
                                    </div>
                                </div>
                                </form>
                                <div class="col-md-12">
                                    <table id="idcat" class="table table-bordered table-striped">
                                        
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>CATEGORIA PADRE</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $accatBLLTable = new accatBLL();
                                            $ListaAccat = $accatBLLTable->selectAll();
                                            ?>

                                            <?php
                                            foreach ($ListaAccat as $value) {
                                                ?>
                                                <tr>

                                                    <td> <?php echo $value->getAccatCcat(); ?></td>
                                                    <td> <?php echo $value->getAccatNomb(); ?></td>
                                                    <td> <?php
                                                        if ($value->getAccatCpad() == 0) {
                                                            ?>
                                                            <span class="label label-danger">Es padre</span>
                                                            <?php
                                                        } else {
                                                            $SelectAccatPad = $accatBLLTable->selectaccatPadre($value->getAccatCpad());
                                                            ?>

                                                            <span class="label label-success"><?php echo $SelectAccatPad->getAccatNomb(); ?></span>

                                                            <?php
                                                        }
                                                        ?> 

                                                    </td>

                                                    <th> <input id="checCat<?php echo $value->getAccatCcat(); ?>" type="checkbox" class="form-control" OnClick="Agregar(<?php echo $value->getAccatCcat(); ?>,<?php echo $idacjueUltimo->getAcjueJjue() ?>);"> </th>
                                                </tr>   
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>           
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
<script src="js/addventares.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>  
</body>
</html>
