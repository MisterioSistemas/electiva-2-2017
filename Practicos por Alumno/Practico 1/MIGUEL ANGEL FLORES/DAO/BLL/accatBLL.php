<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accatBLL
 *
 * @author Miguel
 */
class accatBLL {

    public function insert($accatNomb, $accatCpad) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO accat(accatNomb,accatCpad) 
            VALUES (:accatNomb,:accatCpad)", array(
            ":accatNomb" => $accatNomb,
            ":accatCpad" => $accatCpad
        ));
        
    }

    public function update($accatCcat, $accatNomb, $accatCpad) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            UPDATE accat
            SET
                accatNomb = :accatNomb,
                accatCpad = :accatCpad
            WHERE
                accatCcat = :accatCcat", array(
            ":accatNomb" => $accatNomb ,
            ":accatCpad" => $accatCpad,
         
            ":accatCcat" => $accatCcat
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            DELETE FROM accat
            WHERE accatCcat = :pId", array(
            ":pId" => $id
        ));
    }

    public function selectAll() {
        $ListaAccat = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
                  SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat`");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objaccat = $this->rowToDto($row);
            $ListaAccat[] = $objaccat;
        }
        return $ListaAccat;
    }

    public function selectAccatPad() {
        $objConexion = new Connection();
        $listaAccat = array();

        $res = $objConexion->queryWithParams("
               SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat` 
                WHERE 1 and `accatCpad` = :accatCpad", array(
            ":accatCpad" => 0
        ));
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $accat = $this->rowToDto($row);
            $listaAccat[] = $accat;
        }
        return $listaAccat;
    }

    public function selectAccatPads($accatCcat) {
        $objConexion = new Connection();
        $listaAccats = array();
        $ress = $objConexion->queryWithParams("
               SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat` 
                WHERE 1 and `accatCpad` = :accatCpad", array(
            ":accatCpad" => $accatCcat
        ));
        
        while ($rows = $ress->fetch(PDO::FETCH_ASSOC)) {
            $accats = $this->rowToDto($rows);
            $listaAccats[] = $accats;
        }
        return $listaAccats;
        
       
    }

    public function selectaccatPadre($accatCcat) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat` 
                WHERE  `accatCcat`= :accatCcat", array(
            ":accatCcat" => $accatCcat
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }
    public function selectAccatByID($accatCcat) {
        $objConexion = new Connection();
        $listaAccats;
        $ress = $objConexion->queryWithParams("
               SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat` 
                WHERE 1 and `accatCpad` = :accatCpad", array(
            ":accatCpad" => $accatCcat
        ));
        $total = $ress->rowCount();

        if ($total > 0) {
            while ($row = $ress->fetch(PDO::FETCH_OBJ)) {

                $listaAccats = array("accatCcat" => $row->accatCcat, "accatNomb" => $row->accatNomb);
            }
        }



        return $listaAccats;
    }


    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT `accatCcat`, `accatNomb`, `accatCpad`
              FROM `accat` 
                WHERE accatCcat = :accatCcat", array(
            ":accatCcat" => $id
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }

    function rowToDto($row) {
        $obj = new accat();
        $obj->setAccatCcat($row["accatCcat"]);
        $obj->setAccatNomb($row["accatNomb"]);
        $obj->setAccatCpad($row["accatCpad"]);
        return $obj;
    }

}
