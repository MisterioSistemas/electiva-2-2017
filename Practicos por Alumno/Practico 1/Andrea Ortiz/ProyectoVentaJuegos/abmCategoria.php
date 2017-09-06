<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Categoria.php';
include_once './DAO/BLL/CategoriaBLL.php';

$categoriaBLL = new CategoriaBLL();


if (isset($_REQUEST["tarea"])) {

    $tarea = $_REQUEST["tarea"];


    switch ($tarea) {
        case "insertar":
            if (!isset($_REQUEST["nombre"]) || !isset($_REQUEST["idCategoriaPadre"])) {
                mostrarMensaje('Error al insertar, parametros incompletos');
            } else {
                $nombre = $_REQUEST["nombre"];
                $idCategoriaPadre = $_REQUEST["idCategoriaPadre"];

                $categoriaBLL->insert($nombre, $idCategoriaPadre);
            }
            break;
        case "actualizar":
            if (!isset($_REQUEST["nombre"]) || !isset($_REQUEST["idCategoriaPadre"]) || !isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $nombre = $_REQUEST["nombre"];
                $idCategoriaPadre = $_REQUEST["idCategoriaPadre"];

                $categoriaBLL->update($nombre, $idCategoriaPadre, $id);
            }
            break;
        case "eliminar":
            if (!isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $categoriaBLL->delete($id);
            }
            break;
    }
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
                <div class="col-md-12">

                    <div >
                        <a class="btn btn-primary" href="AgregarCategoria.php">Agregar Categoria</a>
                    </div>





                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>ID Padre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listaCategorias = $categoriaBLL->selectAll();

                            foreach ($listaCategorias as $objCategoria) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $objCategoria->getId(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objCategoria->getNombre(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objCategoria->getIdCategoriaPadre(); ?>
                                    </td>
                                    <td>
                                        <a href="AgregarCategoria.php?id=<?php echo $objCategoria->getId(); ?>">Editar</a>
                                    </td>
                                    <td>
                                        <a href="abmCategoria.php?tarea=eliminar&id=<?php echo $objCategoria->getId(); ?>">Eliminar</a>
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
