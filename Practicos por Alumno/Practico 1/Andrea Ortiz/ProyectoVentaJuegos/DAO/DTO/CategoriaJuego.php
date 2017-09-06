<?php

/**
 * Description of CategoriaJuego
 *
 * @author ANDREA_ORTIZ
 */
class CategoriaJuego {

    private $id;
    private $idJuego;
    private $idCategoria;

    function getId() {
        return $this->id;
    }

    function getIdJuego() {
        return $this->idJuego;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdJuego($idJuego) {
        $this->idJuego = $idJuego;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

}
