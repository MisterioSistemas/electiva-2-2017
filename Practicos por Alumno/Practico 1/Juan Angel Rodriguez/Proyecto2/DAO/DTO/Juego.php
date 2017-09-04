<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juego
 *
 * @author rodriguezja
 */
class Juego {
    
    private $idJuego;
    private $nombre;
    private $precio;
    private $descripcion;
    private $imagen;
    
//    function __construct($idJuego, $nombre, $precio, $descripcion) {
//        $this->idJuego = $idJuego;
//        $this->nombre = $nombre;
//        $this->precio = $precio;
//        $this->descripcion = $descripcion;
//    }
    function __construct() {
        
    }

    
    function getImagen() {
        return $this->imagen;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

        function getIdJuego() {
        return $this->idJuego;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdJuego($idJuego) {
        $this->idJuego = $idJuego;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



}
