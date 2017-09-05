<?php

/**
 * Description of Categoria
 *
 * @author ANDREA_ORTIZ
 */
class Categoria {

    private $id;
    private $nombre;
    private $idCategoriaPadre;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdCategoriaPadre() {
        return $this->idCategoriaPadre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdCategoriaPadre($idCategoriaPadre) {
        $this->idCategoriaPadre = $idCategoriaPadre;
    }


    
    
    
}
