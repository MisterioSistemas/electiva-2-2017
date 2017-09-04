<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuegoBLL
 *
 * @author rodriguezja
 */
class JuegoBLL {
    
    public function insert($nombre, $precio, $descripcion, $imagen) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("CALL sp_juego_insert(:pIdJuego)(:pNombre, :pPrecio, :pDescripcion, :pImagen)", array(
                                        ":pNombre" => $nombre,
                                        ":pNombre" => $precio,
                                        ":pNombre" => $descripcion,
                                        ":pNombre" => $imagen                             
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

//    public function delete($id) {
//        $objConexion = new Connection();
//        $objConexion->queryWithParams("CALL sp_Persona_Delete(:pId)", array(
//            ":pId" => $id
//        ));
//    }

    public function selectAll() {
        $listaJuegos = array();
        $objConexion = new Connection();
        $res = $objConexion->query("CALL sp_juego_selectall()");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objJuego = $this->rowToDto($row);
            $listaJuegos[] = $objJuego;
        }
        return $listaJuegos;
    }

//    public function select($id) {
//        $objConexion = new Connection();
//        $res = $objConexion->queryWithParams("CALL sp_Persona_SelectById(:pId)", array(
//            ":pId" => $id
//        ));
//        if ($res->rowCount() == 0) {
//            return null;
//        }
//        $row = $res->fetch(PDO::FETCH_ASSOC);
//        return $this->rowToDto($row);
//    }
//
    function rowToDto($row) {
        $objJuego = new Juego();
        $objJuego->setIdJuego($row["idJuego"]);
        $objJuego->setNombre($row["nombre"]);
        $objJuego->setPrecio($row["precio"]);
        $objJuego->setDescripcion($row["descripcion"]);
        $objJuego->setImagen($row["imagen"]);
        return $objJuego;
    }

}
