<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaPadre.php';
include_once './DAO/BLL/CategoriaPadreBLL.php';

$categoriaPadreBLL = new CategoriaPadreBLL();
$id = 0;
$objCategoriaPadre = null;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $objCategoriaPadre = $categoriaPadreBLL->select($id);
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
    </head>
    <body>
       
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Datos de Categoria</h2>
                    <form action="abmCategoriaPadre.php" method="post">
                        <input type="hidden" value="<?php
                        if ($objCategoriaPadre != null) {
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
                            if ($objCategoriaPadre != null) {
                                echo $objCategoriaPadre->getNombre();
                            }
                            ?>" required="required" />
                        </div>
                       

                        <div>
                            <input type="submit" value="Guardar Datos">
                            <a href="AgregarCategoriaPadre.php" class="btn btn-danger" >Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </body>
</html>
