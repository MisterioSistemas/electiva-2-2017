<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaBLL
 *
 * @author COCCO
 */
class CategoriaBLL {
    
    public function insert($nombre, $categoriaPadre) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO tblCategorias(nombre, idCategoriaPadre)VALUES("
                . ":pNombre, :pCategoriaPadre);", array(
                    ":pNombre"=>$nombre,
                    ":pCategoriaPadre"=>$categoriaPadre
                ));
    }
    
    public function update($nombre, $categoriaPadre, $id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("UPDATE tblCategorias
                SET 
                    nombre = :pNombre,
                    idCategoriaPadre = :pCategoriaPadre
                WHERE id = :pId", array(
                    ":pNombre"=>$nombre,
                    ":pCategoriaPadre"=>$categoriaPadre,
                    ":pId"=>$id
                ));
    }
    
    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams(
                "DELETE FROM tblCategorias
                
                WHERE id = :pId", array(
                    ":pId"=>$id
                ));
    }
    
    public function selectAll() {
        $listaCategorias = array();
        $objConexion = new Connection();
        $res = $objConexion->query(
                "SELECT 
                    id ,
                    nombre ,
                    idCategoriaPadre
                FROM tblCategorias");
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $objCategoria = $this->rowToDto($row);
            $listaCategorias[] = $objCategoria;
        }
        
        return $listaCategorias;
    }
    
    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams(
                "SELECT 
                    id ,
                    nombre ,
                    idCategoriaPadre
                FROM tblCategorias
                WHERE id = :pId", array(
                    ":pId"=>$id
                ));
        
        if($res->rowCount()==0){
            return null;
        }
        
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }
    
    public function selectName($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams(
                "SELECT
                    CJ.id,
                    CJ.idJuego,
                    idCategoria
                FROM tblCategorias C , tblCategoriaDeJuego CJ
                WHERE C.id = :pId and C.id = CJ.idCategoria", array(
                    ":pId"=>$id
                ));
        
        if($res->rowCount()==0){
            return null;
        }
        
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto2($row);
    }
    
    function rowToDto($row) {
        $objCategoria = new Categoria();
        $objCategoria->setId($row["id"]);
        $objCategoria->setNombre($row["nombre"]);
        $objCategoria->setCategoriaPadre($row["idCategoriaPadre"]);
        
        return $objCategoria;
    }
    
    function rowToDto2($row) {
        $objCategoriaJuego = new CategoriaJuego();
        $objCategoriaJuego->setId($row["id"]);
        $objCategoriaJuego->setIdJuego($row["idJuego"]);
        $objCategoriaJuego->setIdCategoria($row["idCategoria"]);
        
        return $objCategoriaJuego;
    }
    
    
}
