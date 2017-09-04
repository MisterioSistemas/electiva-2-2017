<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acjue
 *
 * @author Miguel
 */
class acjue {
    private $acjueJjue;
    private $acjuePrec;
    private $acjueNomb;
    private $acjueDesc;
    function getAcjueJjue() {
        return $this->acjueJjue;
    }

    function getAcjuePrec() {
        return $this->acjuePrec;
    }

    function getAcjueNomb() {
        return $this->acjueNomb;
    }

    function getAcjueDesc() {
        return $this->acjueDesc;
    }

    function setAcjueJjue($acjueJjue) {
        $this->acjueJjue = $acjueJjue;
    }

    function setAcjuePrec($acjuePrec) {
        $this->acjuePrec = $acjuePrec;
    }

    function setAcjueNomb($acjueNomb) {
        $this->acjueNomb = $acjueNomb;
    }

    function setAcjueDesc($acjueDesc) {
        $this->acjueDesc = $acjueDesc;
    }


}
