<?php

/**
 * Description of CategoriaBLL
 *
 * @author ANDREA_ORTIZ
 */
class CategoriaBLL {

    public function insert($nombre, $idCategoriaPadre) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO tbl_categoria(nombre,idCategoriaPadre)
                 VALUES (:pNombre, :pIdCategoriaPadre)", array(
            ":pNombre" => $nombre,
            ":pIdCategoriaPadre" => $idCategoriaPadre));
    }

    public function update($nombre, $idCategoriaPadre, $id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("UPDATE tbl_categoria SET 
                nombre = :pNombre,
                idCategoriaPadre = :pIdCategoriaPadre
                WHERE 
                id = :pId", array(
            ":pNombre" => $nombre,
            ":pIdCategoriaPadre" => $idCategoriaPadre,
            ":pId" => $id
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                DELETE From tbl_categoria 
                WHERE id = :pId", array(
            ":pId" => $id
        ));
    }

    public function selectAll() {
        $listaCategorias = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
                SELECT id,nombre,idCategoriaPadre 
                FROM tbl_Categoria");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objCategoria = $this->rowToDto($row);
            $listaCategorias[] = $objCategoria;
        }
        return $listaCategorias;
    }

    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT id,nombre,idCategoriaPadre 
                FROM tbl_Categoria
                WHERE id = :pId", array(
            ":pId" => $id
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }
    
      public function selectPadre($idPadre) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT nombre 
                FROM tbl_Categoria
                WHERE idCategoriaPadre = :pidPadre", array(
            ":pidPadre" => $idPadre
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDtoSoloNombre($row);
    }


    function rowToDtoSoloNombre($row) {
        $objCategoria = new Categoria();
        
        $objCategoria->setNombre($row["nombre"]);
       
        return $objCategoria;
    }
    
    function rowToDto($row) {
        $objCategoria = new Categoria();
        $objCategoria->setId($row["id"]);
        $objCategoria->setNombre($row["nombre"]);
        $objCategoria->setIdCategoriaPadre($row["idCategoriaPadre"]);

        return $objCategoria;
    }

}
