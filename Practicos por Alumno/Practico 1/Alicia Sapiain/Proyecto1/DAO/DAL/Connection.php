<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author COCCO
 */
class Connection {

    private $server = "localhost";
    private $usr = "root";
    private $pass = "root";
    private $db = "juegos";
    private $connection;
    
    function getConnection() {
        if($this->connection == null){
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->db", $this->usr, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return $this->connection;
    }
    
    function query($csql) {
        return $this->getConnection()->query($csql);
    }
    
    function queryWithParams($csql, $paramArray) {
        $q = $this->getConnection()->prepare($csql);
        $q->execute($paramArray);
        return $q;
    }
    
    
    function getLastInsertedId() {
        return $this->getConnection()->lastInsertId();
    }
}
