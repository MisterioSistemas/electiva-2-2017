<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaJuego.php';
include_once './DAO/BLL/CategoriaJuegoBLL.php';

$categoriaJuegoBLL = new CategoriaJuegoBLL();
$id = 0;
$objCategoriaJuego = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $objCategoriaJuego = $categoriaJuegoBLL->select($id);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Categoria - Juego</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Datos de Categoria</h2>
                    <form action="abmCategoriaJuego.php" method="post">
                        <input type="hidden" value="<?php
                        if ($objCategoriaJuego != null) {
                            echo "actualizar";
                        } else {
                            echo "insertar";
                        }
                        ?>" name="tarea"/>
                        <input  type="hidden" value="<?php echo $id; ?>" name="id"/>
                        <div class="form-group">
                            <label>
                                Id Juego:
                            </label>

                            <input class="form-control" type="text" name="idJuego" value="<?php
                            if ($objCategoriaJuego != null) {
                                echo $objCategoriaJuego->getIdJuego();
                            }
                            ?>" required="required" />
                        </div>
                        <div class="form-group">
                            <label>
                                Id Categoria:
                            </label>

                            <input class="form-control"  type="text" name="idCategoria" value="<?php
                            if ($objCategoriaJuego != null) {
                                echo $objCategoriaJuego->getIdCategoria();
                            }
                            ?>" required="required" />
                        </div>

                        <div>
                            <input type="submit" value="Guardar Datos">
                            <a href="AgregarCategoriaJuego.php" class="btn btn-danger" >Cancelar</a>
                        </div>

                    </form>

                </div>
            </div>


        </div>
    </body>
</html>
