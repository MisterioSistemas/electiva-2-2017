<?php

/**
 * Description of CategoriaJuegoBLL
 *
 * @author ANDREA_ORTIZ
 */
class CategoriaJuegoBLL {

    public function insert($idJuego, $idCategoria) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO tbl_categoriajuego(idJuego,idCategoria)
                 VALUES (:pIdJuego, :pIdCategoria)", array(
            ":pIdJuego" => $idJuego,
            ":pIdCategoria" => $idCategoria
        ));
    }

    public function update($idJuego, $idCategoria, $id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("UPDATE tbl_categoriajuego SET 
                idJuego = :pIdJuego,
                idCategoria = :pIdCategoria                
                WHERE 
                id = :pId", array(
            ":pIdJuego" => $idJuego,
            ":pIdCategoria" => $idCategoria,
            ":pId" => $id
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                DELETE From tbl_categoriajuego 
                WHERE id = :pId", array(
            ":pId" => $id
        ));
    }

    public function selectAll() {
        $listaCategoriaJuegos = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
                SELECT id,idJuego,idCategoria 
                FROM tbl_categoriajuego");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objCategoriaJuego = $this->rowToDto($row);
            $listaCategoriaJuegos[] = $objCategoriaJuego;
        }
        return $listaCategoriaJuegos;
    }

    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT id,idJuego,idCategoria 
                FROM tbl_categoriajuego
                WHERE id = :pId", array(
            ":pId" => $id
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }

    function rowToDto($row) {
        $objCategoriaJuego = new CategoriaJuego();
        $objCategoriaJuego->setId($row["id"]);
        $objCategoriaJuego->setIdJuego($row["idJuego"]);
        $objCategoriaJuego->setIdCategoria($row["idCategoria"]);
        return $objCategoriaJuego;
    }

}
