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


class acjueBLL {

    public function insert($acjueJjue, $acjueNomb, $acjuePrec, $acjueDesc) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO acjue(acjueJjue,acjueNomb,acjuePrec,acjueDesc) 
            VALUES (:acjueJjue,:acjueNomb,:acjuePrec,:acjueDesc)", array(
            ":acjueJjue" => $acjueJjue,
            ":acjueNomb" => $acjueNomb,
            ":acjuePrec" => $acjuePrec,
            ":acjueDesc" => $acjueDesc
        ));
    }

    public function update($acjueJjue, $acjueNomb, $acjuePrec, $acjueDesc) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            UPDATE acjue
            SET
                acjueJjue = :acjueJjue,
                acjueNomb = :acjueNomb,
                acjuePrec = :acjuePrec,
                acjueDesc = :acjueDesc
            WHERE
                acjueJjue = :pId", array(
            ":acjueJjue" => $acjueJjue,
            ":acjueNomb" => $acjueNomb,
            ":acjuePrec" => $acjuePrec,
            ":acjueDesc" => $acjueDesc,
            ":pId" => $acjueJjue
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            DELETE FROM accxj
            WHERE accxjCjue = :pId", array(
            ":pId" => $id
        ));
    }
    public function deleteJxC($accxjCjue) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            DELETE FROM accxj
            WHERE accxjCjue = :accxjCjue ", array(
            ":accxjCjue" => $accxjCjue
        ));
    }
    public function selectAll() {
        $listaJuegos = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
                 SELECT acjueJjue ,acjueNomb, acjuePrec, acjueDesc
                FROM acjue");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objJuegos = $this->rowToDto($row);
            $listaJuegos[] = $objJuegos;
        }
        return $listaJuegos;
    }

    public function selectAllbyCat($accatCcat) {
        $objConexion = new Connection();
        $listaJuegosbyCat = array();
        $ress = $objConexion->queryWithParams("  SELECT acjue.* FROM acjue, accat , accxj
  WHERE accat.`accatCpad` > 0 AND acjue.`acjueJjue` = accxj.`accxjCjue` AND accat.`accatCcat` = accxj.`accxjCcat`
  AND accat.`accatCcat` =  :accatCpad", array(
            ":accatCpad" => $accatCcat
        ));
        $total = $ress->rowCount();

        if ($total > 0) {

            while ($row = $ress->fetch(PDO::FETCH_ASSOC)) {
                $objJuegos = $this->rowToDto($row);
                $listaJuegosbyCat[] = $objJuegos;
            }
        }

        return $listaJuegosbyCat;
    }

    public function selectMaxAcjueJjue() {
        $objConexion = new Connection();
        $res = $objConexion->query("SELECT MAX(acjueJjue)+1 AS acjueJjue,acjueNomb, acjuePrec, acjueDesc FROM acjue"
        );
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }

    public function select($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
                SELECT acjueJjue, acjueNomb, acjuePrec, acjueDesc
                FROM acjue 
                WHERE acjueJjue = :pId", array(
            ":pId" => $id
        ));
        if ($res->rowCount() == 0) {
            return null;
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $this->rowToDto($row);
    }

    function rowToDto($row) {
        $obj = new acjue();
        $obj->setAcjueJjue($row["acjueJjue"]);
        $obj->setAcjueNomb($row["acjueNomb"]);
        $obj->setAcjuePrec($row["acjuePrec"]);

        $obj->setAcjueDesc($row["acjueDesc"]);
        return $obj;
    }

}
