<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';

$juegoBLL = new JuegoBLL();
$id = 0;
$objJuego = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $objJuego = $juegoBLL->select($id);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Juego</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Datos de Categoria</h2>
                    <form action="abmJuego.php" method="post">
                        <input type="hidden" value="<?php
                        if ($objJuego != null) {
                            echo "actualizar";
                        } else {
                            echo "insertar";
                        }
                        ?>" name="tarea"/>
                        <input  type="hidden" value="<?php echo $id; ?>" name="id"/>
                        <div class="form-group">
                            <label>
                                Nombre:
                            </label>
                        
                            <input class="form-control" type="text" name="nombre" value="<?php
                            if ($objJuego != null) {
                                echo $objJuego->getNombre();
                            }
                            ?>" required="required" />
                        </div>
                        <div class="form-group">
                            <label>
                                Precio:
                            </label>
                        
                            <input class="form-control" type="text" name="precio" value="<?php
                            if ($objJuego != null) {
                                echo $objJuego->getPrecio();
                            }
                            ?>" required="required" />
                        </div>

                        <div class="form-group">
                            <label>
                                Descripcion:
                            </label>
                        
                            <input class="form-control" type="text" name="descripcion" value="<?php
                            if ($objJuego != null) {
                                echo $objJuego->getDescripcion();
                            }
                            ?>" required="required" />
                        </div>


                        <div>
                            <input type="submit" value="Guardar Datos">
                            <a href="AgregarJuego.php" class="btn btn-danger" >Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </body>
</html>
