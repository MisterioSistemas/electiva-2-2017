<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaPadre.php';
include_once './DAO/BLL/CategoriaPadreBLL.php';

$categoriaPadreBLL = new CategoriaPadreBLL();


if (isset($_REQUEST["tarea"])) {

    $tarea = $_REQUEST["tarea"];


    switch ($tarea) {
        case "insertar":
            if (!isset($_REQUEST["nombre"])) {
                mostrarMensaje('Error al insertar, parametros incompletos');
            } else {
                $nombre = $_REQUEST["nombre"];


                $categoriaPadreBLL->insert($nombre);
            }
            break;
        case "actualizar":
            if (!isset($_REQUEST["nombre"]) || !isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $nombre = $_REQUEST["nombre"];

                $categoriaPadreBLL->update($nombre, $id);
            }
            break;
        case "eliminar":
            if (!isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $categoriaPadreBLL->delete($id);
            }
            break;
    }
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
                <div class="col-md-12">

                    <div >
                        <a class="btn btn-primary" href="AgregarCategoriaPadre.php">Agregar Categoria Padre</a>
                    </div>





                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listaCategoriasPadre = $categoriaPadreBLL->selectAll();

                            foreach ($listaCategoriasPadre as $objCategoriaPadre) {
                                ?>


                                <tr>
                                    <td>
                                        <?php echo $objCategoriaPadre->getId(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objCategoriaPadre->getNombre(); ?>
                                    </td>

                                    <td>
                                        <a href="AgregarCategoriaPadre.php?id=<?php echo $objCategoriaPadre->getId(); ?>">Editar</a>
                                    </td>
                                    <td>
                                        <a href="abmCategoriaPadre.php?tarea=eliminar&id=<?php echo $objCategoriaPadre->getId(); ?>">Eliminar</a>
                                    </td>



                                </tr>



                                <?php
                            }
                            ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <br>
        <br>
        <a href="index.php"><i class="glyphicon glyphicon-arrow-left"></i>Volver a la Pagina Editable</a>
        <br/>
        <a href="PaginaPrincipal.php">Pagina Principal</a>

    </body>
</html>
