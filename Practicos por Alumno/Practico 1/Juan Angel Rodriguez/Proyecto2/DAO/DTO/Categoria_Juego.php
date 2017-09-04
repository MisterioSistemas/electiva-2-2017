<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria_Juego
 *
 * @author rodriguezja
 */
class Categoria_Juego {
    private $idCategoriaJuego;
    private $idJuego;
    private $idCategoria;
    
    function __construct($idCategoriaJuego, $idJuego, $idCategoria) {
        $this->idCategoriaJuego = $idCategoriaJuego;
        $this->idJuego = $idJuego;
        $this->idCategoria = $idCategoria;
    }
   
    
    function getIdCategoriaJuego() {
        return $this->idCategoriaJuego;
    }

    function getIdJuego() {
        return $this->idJuego;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setIdCategoriaJuego($idCategoriaJuego) {
        $this->idCategoriaJuego = $idCategoriaJuego;
    }

    function setIdJuego($idJuego) {
        $this->idJuego = $idJuego;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }



}
