<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaJuego
 *
 * @author COCCO
 */
class CategoriaJuego {
    private $id;
    private $idJuego;
    private $idCategoria;
    
    public function getId() {
        return $this->id;
    }

    public function getIdJuego() {
        return $this->idJuego;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdJuego($idJuego) {
        $this->idJuego = $idJuego;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }


}
