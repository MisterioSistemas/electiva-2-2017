<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaBLL
 *
 * @author rodriguezja
 */
class CategoriaBLL {
    
     public function insert($nombre, $idCategoriaPadre) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO Categoria(nombre,idCategoriaPadre) 
                                        VALUES (:pNombre,:pIdCategoriaPadre)", array(
                                        ":pNombre" => $nombre,
                                        ":pIdCategoriaPadre" => $idCategoriaPadre
        ));
    }

    public function update($nombre, $idCategoriaPadre, $idCategoria) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
             UPDATE Categoria
            SET
                nombre = :pNombre,
                idCategoriaPadre = :pIdCategoriaPadre,
            WHERE
                idCategoria = :pIdCategoria", array(
            ":pNombre" => $nombre,
            ":pIdCategoriaPadre" => $idCategoriaPadre,
            ":pIdCategoria" => $idCategoria

        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("CALL sp_Persona_Delete(:pId)", array(
            ":pId" => $id
        ));
    }

    public function selectAll() {
        $listaPersonas = array();
        $objConexion = new Connection();
        $res = $objConexion->query("CALL sp_Persona_SelectAll()");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objPersona = $this->rowToDto($row);
            $listaPersonas[] = $objPersona;
        }
        return $listaPersonas;
    }

    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("CALL sp_Persona_SelectById(:pId)", array(
            ":pId" => $id
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }

    function rowToDto($row) {
        $objPersona = new Persona();
        $objPersona->setId($row["id"]);
        $objPersona->setNombre($row["nombre"]);
        $objPersona->setApellido($row["apellido"]);
        $objPersona->setCiudad($row["ciudad"]);
        $objPersona->setEdad($row["edad"]);
        return $objPersona;
    }

}
