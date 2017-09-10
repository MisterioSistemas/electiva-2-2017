<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author COCCO
 */
class Categoria {
    private $id;
    private $nombre;
    private $categoriaPadre;
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoriaPadre() {
        return $this->categoriaPadre;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCategoriaPadre($categoriaPadre) {
        $this->categoriaPadre = $categoriaPadre;
    }


}
