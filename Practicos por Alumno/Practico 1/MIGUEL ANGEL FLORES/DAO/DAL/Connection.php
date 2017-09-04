<?php

/**
 * Description of Connection
 *
 * @author JM
 */
class Connection {

    private $server = "localhost";
    private $usr = "root";
    private $pass = "";
    private $db = "practico1_web2";
    private $connection;

    function getConnection() {
        if ($this->connection == null) {
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->db", $this->usr, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return $this->connection;
    }

    function query($csql) {
        return $this->getConnection()->query($csql);
        
    }

    function prepare($csql) {
        $query = $this->getConnection()->prepare($csql);
        $query->execute();
        return $query;
    }

    function queryWithParams($csql, $paramArray) {
        $q = $this->getConnection()->prepare($csql);
        $q->execute($paramArray);
        return $q;
    }
 public static function getInstance() {
     // Create the connection if not already created
     if (self::$connection == null) {
        self::$connection = new self();
     } 
     // And return a reference to that connection
     return self::$connection;
   }
}
