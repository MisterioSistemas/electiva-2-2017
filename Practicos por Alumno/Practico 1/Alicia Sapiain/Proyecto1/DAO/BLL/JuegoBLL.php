<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuegoBLL
 *
 * @author COCCO
 */
class JuegoBLL {
    
    public function insert($nombre, $precio, $padre, $descripcion) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO tblJuegos(nombre, precio, descripcion)VALUES("
                . ":pNombre, :pPrecio, :pDescripcion);", array(
                    ":pNombre"=>$nombre,
                    ":pPrecio"=>$precio,
                    ":pDescripcion"=>$descripcion
                ));
        
        $objSentencia=$objConexion->getLastInsertedId();
        
        
        
        $objConexion->queryWithParams("INSERT INTO tblCategoriaDeJuego(idJuego, idCategoria)VALUES("
                . ":pJuego, :pCategoria);", array(
                    ":pJuego"=>$objSentencia,
                    ":pCategoria"=>$padre
                    
                ));
    }
    
    public function update($nombre, $precio, $categoria, $descripcion, $id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("UPDATE tblJuegos
                SET 
                    nombre = :pNombre,
                    precio = :pPrecio,
                    descripcion = :pDescripcion
                WHERE id = :pId", array(
                    ":pNombre"=>$nombre,
                    ":pPrecio"=>$precio,
                    ":pDescripcion"=>$descripcion,
                    ":pId"=>$id
                ));
        
        $objConexion->queryWithParams("UPDATE tblCategoriaDeJuego
                SET 
                    idCategoria = :pCategoria
                    
                WHERE id = :pId", array(
                    ":pCategoria"=>$categoria,
                    ":pId"=>$id
                ));
    }
    
    public function delete($id) {
        $objConexion = new Connection();
        
        $objConexion->queryWithParams(
                "DELETE FROM tblCategoriaDeJuego
                
                WHERE id = :pId", array(
                    ":pId"=>$id
                ));
        $objConexion->queryWithParams(
                "DELETE FROM tblJuegos
                
                WHERE id = :pId", array(
                    ":pId"=>$id
                ));
    }
    
    public function selectAll() {
        $listaJuegos = array();
        $objConexion = new Connection();
        $res = $objConexion->query(
                "SELECT 
                    id ,
                    nombre ,
                    precio ,
                    descripcion
                FROM tblJuegos");
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $objJuego = $this->rowToDto($row);
            $listaJuegos[] = $objJuego;
        }
        
        return $listaJuegos;
    }
    
    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams(
                "SELECT 
                    J.id ,
                    J.nombre ,
                    J.precio ,
                    J.descripcion,
                    CJ.idJuego
                FROM tblJuegos J, tblCategoriaDeJuego CJ
                WHERE J.id = :pId", array(
                    ":pId"=>$id
                ));
        
        if($res->rowCount()==0){
            return null;
        }
        
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }
    
    function rowToDto($row) {
        $objJuego = new Juego();
        $objJuego->setId($row["id"]);
        $objJuego->setNombre($row["nombre"]);
        $objJuego->setPrecio($row["precio"]);
        $objJuego->setDescripcion($row["descripcion"]);
        
        return $objJuego;
    }
    
}
