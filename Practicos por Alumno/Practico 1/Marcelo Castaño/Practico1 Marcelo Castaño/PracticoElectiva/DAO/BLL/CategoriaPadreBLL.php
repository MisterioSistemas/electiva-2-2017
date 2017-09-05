<?php

/**
 * Description of CategoriaPadreBLL
 *
 * @author ANDREA_ORTIZ
 */
class CategoriaPadreBLL {

    public function insert($nombre) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO tbl_categoriapadre(nombre)
                 VALUES (:pNombre)", array(
            ":pNombre" => $nombre
        ));
    }

    public function update($nombre, $id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("UPDATE tbl_categoriapadre SET 
                nombre = :pNombre
                
                WHERE 
                id = :pId", array(
            ":pNombre" => $nombre,
            ":pId" => $id
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                DELETE From tbl_categoriapadre 
                WHERE id = :pId", array(
            ":pId" => $id
        ));
    }

    public function selectAll() {
        $listaCategoriasPadre = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
                SELECT id,nombre 
                FROM tbl_categoriapadre");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objCategoriaPadre = $this->rowToDto($row);
            $listaCategoriasPadre[] = $objCategoriaPadre;
        }
        return $listaCategoriasPadre;
    }

    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT id,nombre 
                FROM tbl_categoriapadre
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
        $objCategoriaPadre = new CategoriaPadre();
        $objCategoriaPadre->setId($row["id"]);
        $objCategoriaPadre->setNombre($row["nombre"]);


        return $objCategoriaPadre;
    }

}
