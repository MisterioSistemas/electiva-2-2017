<?php
include_once './DAO/DAL/Connection.php';
include_once './DAO/DTO/Juego.php';
include_once './DAO/BLL/JuegoBLL.php';


$juegoBLL = new JuegoBLL();


if (isset($_REQUEST["tarea"])) {

    $tarea = $_REQUEST["tarea"];


    switch ($tarea) {
        case "insertar":
            if (!isset($_REQUEST["nombre"]) || !isset($_REQUEST["precio"]) || !isset($_REQUEST["descripcion"])) {
                mostrarMensaje('Error al insertar, parametros incompletos');
            } else {
                $nombre = $_REQUEST["nombre"];
                $precio = $_REQUEST["precio"];
                $descripcion = $_REQUEST["descripcion"];
                $juegoBLL->insert($nombre, $precio, $descripcion);
            }
            break;
        case "actualizar":
            if (!isset($_REQUEST["nombre"]) || !isset($_REQUEST["precio"]) || !isset($_REQUEST["descripcion"]) || !isset($_REQUEST["id"])) {
                mostrarMensaje('Error al actualizar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $nombre = $_REQUEST["nombre"];
                $precio = $_REQUEST["precio"];
                $descripcion = $_REQUEST["descripcion"];

                $juegoBLL->update($nombre, $precio, $descripcion, $id);
            }
            break;
        case "eliminar":
            if (!isset($_REQUEST["id"])) {
                mostrarMensaje('Error al eliminar, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];
                $juegoBLL->delete($id);
            }
            break;
        case "fotoperfil":
            if (!isset($_REQUEST["id"])) {
                mostrarMensaje('Error al subir foto, parametros incompletos');
            } else {
                $id = $_REQUEST["id"];

                $dir_subida = 'img/';

                $fichero_subido = $dir_subida . $id . ".jpg";

                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
//                    echo "El fichero es vÃ¡lido y se subiÃ³ con Ã©xito.\n";
                } else {
//                    echo "Â¡Posible ataque de subida de ficheros!\n";
                }
            }
            break;
    }
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
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="letrablanca">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div >
                        <a class="btn btn-primary" href="AgregarJuego.php">Agregar Juego</a>
                    </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripcion</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listaJuegos = $juegoBLL->selectAll();

                            foreach ($listaJuegos as $objJuego) {
                                ?>


                                <tr>
                                    <td>
                                        <image class="tamanioimg" src="img/<?php echo $objJuego->getId(); ?>.jpg" />
                                    </td>
                                    <td>
                                        <?php echo $objJuego->getId(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objJuego->getNombre(); ?>
                                    </td>
                                    <td>
                                        <?php echo $objJuego->getPrecio(); ?>
                                    </td>

                                    <td>
                                        <?php echo $objJuego->getDescripcion(); ?>
                                    </td>

                                    <td>
                                        <a href="fotoJuego.php?id=<?php echo $objJuego->getId(); ?>"><i class="glyphicon glyphicon-picture"></i>Subir Foto</a>
                                    </td>
                                    <td>
                                        <a href="AgregarJuego.php?id=<?php echo $objJuego->getId(); ?>"><i class="glyphicon glyphicon-edit"></i>Editar</a>
                                    </td>
                                    <td>
                                        <a href="abmJuego.php?tarea=eliminar&id=<?php echo $objJuego->getId(); ?>"><i class="glyphicon glyphicon-trash"></i>Eliminar</a>
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
