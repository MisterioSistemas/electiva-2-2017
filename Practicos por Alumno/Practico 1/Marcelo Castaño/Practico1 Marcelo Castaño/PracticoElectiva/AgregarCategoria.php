<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Categoria.php';
include_once './DAO/BLL/CategoriaBLL.php';

$categoriaBLL = new CategoriaBLL();
$id = 0;
$objCategoria = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $objCategoria = $categoriaBLL->select($id);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Categoria</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Datos de Categoria</h2>
                    <form action="abmCategoria.php" method="post">
                        <input type="hidden" value="<?php
                        if ($objCategoria != null) {
                            echo "actualizar";
                        } else {
                            echo "insertar";
                        }
                        ?>" name="tarea"/>
                        <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                        <div class="form-group">
                            <label>
                                Nombre:
                            </label>

                            <input class="form-control" type="text" name="nombre" value="<?php
                            if ($objCategoria != null) {
                                echo $objCategoria->getNombre();
                            }
                            ?>" required="required" />
                        </div>
                        <div class="form-group">
                            <label>
                                Categoria Padre:
                            </label>


                            <input class="form-control" type="text" name="idCategoriaPadre" value="<?php
                                   if ($objCategoria != null) {
                                       echo $objCategoria->getIdCategoriaPadre();
                                   }
                                   ?>" required="required" />
                        </div>

                        <div>
                            <input type="submit" value="Guardar Datos">
                            <a href="AgregarCategoria.php" class="btn btn-danger" >Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </body>
</html>
