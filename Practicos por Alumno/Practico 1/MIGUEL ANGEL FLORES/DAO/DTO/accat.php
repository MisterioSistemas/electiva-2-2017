<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accat
 *
 * @author Miguel
 */
class accat {
    private $accatCcat;
    private $accatNomb;
    private $accatCpad;
  
    function getAccatCcat() {
        return $this->accatCcat;
    }

    function getAccatNomb() {
        return $this->accatNomb;
    }

    function getAccatCpad() {
        return $this->accatCpad;
    }

    function setAccatCcat($accatCcat) {
        $this->accatCcat = $accatCcat;
    }

    function setAccatNomb($accatNomb) {
        $this->accatNomb = $accatNomb;
    }

    function setAccatCpad($accatCpad) {
        $this->accatCpad = $accatCpad;
    }


}
