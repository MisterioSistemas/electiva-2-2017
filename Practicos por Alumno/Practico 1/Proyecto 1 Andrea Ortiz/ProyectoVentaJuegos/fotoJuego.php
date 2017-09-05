<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';

$juegoBLL = new JuegoBLL();
$id = 0;
$objJuego = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            Agregar Foto de Juego
                        </div>


                        <div class="panel panel-body">
                            <form action="abmJuego.php" enctype="multipart/form-data" method="post">
                                <input type="hidden" value="fotoperfil" name="tarea"/>
                                <input  type="hidden" value="<?php echo $id; ?>" name="id" />

                                <div class="form-group">
                                    <input  type="file" name="archivo" required="required"/>
                                    <image class="tamanioimg" src="img/<?php echo $id; ?>.jpg" />
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="subir foto" />
                                    <a href="fotoJuego.php" class="btn btn-danger">Cancelar</a>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
