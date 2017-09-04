
<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/accat.php';
include_once './DAO/BLL/accatBLL.php';
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
        <title>Juegos</title>
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
        <style>
            .menuTitle{
                border-bottom: 1px solid rgba(255,255,255,255.5); 
            } 
            .menuTitle{
                display: block;
                float: none;
                font-size: 16px;
                line-height: 18px;
                font-family: OpenSansMedium !important;
                padding-bottom: 6px;
                margin-bottom: 10px;
            } 
            .row-flex, .row-flex > a{
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
            }
            .row-flex, .row-flex > a > div[class*='col-'] {  
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
            }
            .row-flex-wrap {
                -webkit-flex-flow: row wrap;
                align-content: flex-start;
                flex:0;
            }
            
            #general{
                margin-top: 15px;
                padding: 10px;
                background-color: rgba(255,255,255,0.07);
            }

            .info h4{ 
                color:#bfbfbf;
                font-size: 30px;
                text-align: center;
            }

            .info img{ 
                width: 100%;
            }
            .gameStore{ width: 100%;
                        margin: 20px 0 10px 0;
            }
            .price {
                height: 50px;
               font-size: 24px;
                color:#bfbfbf;
                text-align: center;
            }
            .carrito {
                text-align: center;
            }
            .price label{
                padding: 12px;
            }
            .services > container-flex > a > div[class*='col-'] div,.row-flex > div[class*='col-'] div {
                width:100%;
            }
            .flex-col {
                display: flex;
                display: -webkit-flex;
                flex: 1 100%;
                flex-flow: column nowrap;
            }
            .flex-grow {
                display: flex;
                -webkit-flex: 2;
                flex: 2;
            }
        </style>
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
                                    <li><a href="admin.php"><i class="fa fa-desktop" title="ADMIN"></i></a></li>
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
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php
                            $personaBLL = new accatBLL();
                            ?>
                            <?php
                            $res = $personaBLL->selectAccatPad();
                            foreach ($res as $r) {
                                ?>
                                <?php
                                $ress = $personaBLL->selectAccatPads($r->getAccatCcat());
                                ?>
                                <?php
                                $cont = 0;
                                foreach ($ress as $rrr) {
                                    $cont++;
                                }
                                ?> 
                                <?php
                                if ($cont <= 0) {
                                    ?><li><a href=""><?php echo $r->getAccatNomb(); ?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $r->getAccatNomb(); ?> <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($ress as $rr) {
                                                ?><li><a href=""><?php echo $rr->getAccatNomb(); ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                }
                            }
                            ?></ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
        <section id="services" style="height: 620px">
            <?php
            $juegosBLL = new acjueBLL();
            if (isset($_REQUEST['acjueCjue'])) {
                $acjueCjue = $_REQUEST['acjueCjue'];
                $resJuegos = $juegosBLL->select($acjueCjue);
            }
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4" style="margin-top: 20px">
                        <div class="info"> 
                            <div class="info2" >
                                <div>
                                    <img src="images/image2.jpg" >
                                    
                                    <div id="general"class="col-md-12 col-sm-4"> 
                               
                                    <div class="price"> 
                                        <label><?php echo $resJuegos->getAcjuePrec() . " BS"; ?> </label>
                                    </div>
                                    <div class="carrito">
                                              <a href="javascript:;" class="btn    actionBtn btn-primary" data-dismiss="modal">Agregar al carrito</a>
                          
                                    </div>
                                    </div>
                                    
                                </div >

                            </div>
                        </div>
                    </div><!--/.col-md-3-->
                    <div class="col-md-9 col-sm-8">
                        <?php
                        ?>
                        <div class="col-md-12 gameStore">
                            <div class="info"> 
                                <div class="info2" >
                                    <h1><?php echo $resJuegos->getAcjueNomb(); ?></h1>
                                    <div class="descripcion"> 
                                        <h2> DESCRIPCION</h2>
                                        <p><?php echo $resJuegos->getAcjueDesc(); ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        ?>

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
