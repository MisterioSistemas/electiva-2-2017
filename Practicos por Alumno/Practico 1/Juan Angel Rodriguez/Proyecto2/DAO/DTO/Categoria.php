<?php

/**
 * Description of Persona
 *
 * @author Angel Rodriguez
 */
class Categoria {
    
    private $idCategoria;
    private $nombre;
    private $idCategoriaPadre;
    
    function __construct($idCategoria, $nombre, $idCategoriaPadre) {
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
        $this->idCategoriaPadre = $idCategoriaPadre;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdCategoriaPadre() {
        return $this->idCategoriaPadre;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdCategoriaPadre($idCategoriaPadre) {
        $this->idCategoriaPadre = $idCategoriaPadre;
    }


}
