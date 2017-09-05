<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/CategoriaJuego.php';
include_once './DAO/BLL/CategoriaJuegoBLL.php';

$categoriaJuegoBLL = new CategoriaJuegoBLL();


if (isset($_REQUEST["tarea"])) {

    $tarea = $_REQUEST["tarea"];


    switch ($tarea) {
        case "insertar":
            if (!isset($_REQUEST["idJuego"]) || !isset($_REQUEST["idCategoria"])) {
                mostrarMensaje('Error al insertar, parametros incompletos');
            } else {

                $idJuego = $_REQUEST["idJuego"];
                $idCategoria = $_REQUEST["idCategoria"];
                $categoriaJuegoBLL->insert($idJuego, $idCategoria);
            }
            break;
        case "actualizar":
            if (!isset($_REQUEST["idJuego"]) || !isset($_REQUEST["idCategoria"]) || !isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $idJuego = $_REQUEST["idJuego"];
                $idCategoria = $_REQUEST["idCategoria"];

                $categoriaJuegoBLL->update($idJuego, $idCategoria, $id);
            }
            break;
        case "eliminar":
            if (!isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $categoriaJuegoBLL->delete($id);
            }
            break;
    }
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
                <div class="col-md-12">
                    <div >
                        <a class="btn btn-primary" href="AgregarCategoriaJuego.php">Agregar Juegos a la categoria</a>
                    </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Juego</th>
                                <th>Categoria</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listaCategoriasJuegos = $categoriaJuegoBLL->selectAll();

                            foreach ($listaCategoriasJuegos as $objCategoriaJuego) {
                                ?>


                                <tr>
                                    <td>
                                        <?php echo $objCategoriaJuego->getId(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objCategoriaJuego->getIdJuego(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objCategoriaJuego->getIdCategoria(); ?>
                                    </td>

                                    <td>
                                        <a href="AgregarCategoriaJuego.php?id=<?php echo $objCategoriaJuego->getId(); ?>">Editar</a>
                                    </td>
                                    <td>
                                        <a href="abmCategoriaJuego.php?tarea=eliminar&id=<?php echo $objCategoriaJuego->getId(); ?>">Eliminar</a>
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
        <br>
        <a href="index.php"><i class="glyphicon glyphicon-arrow-left"></i>Volver a la Pagina Editable</a>
        <br/>
        <a href="PaginaPrincipal.php">Pagina Principal</a>
    </body>
</html>
