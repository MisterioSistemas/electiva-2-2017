<?php

include_once '../../DAO/DAL/Connection.php';
?>
<?php

$checked = $_REQUEST["checked"];
    if ($checked == 1) {
        $accxjCcat = $_REQUEST["accxjCcat"];
        $accxjCjue = $_REQUEST["accxjCjue"];
        $cas = new Inserts();
        $cas->insert($accxjCjue, $accxjCcat);
    } else {
        $accxjCcat = $_REQUEST["accxjCcat"];
        $accxjCjue = $_REQUEST["accxjCjue"];
        $cas = new Inserts();
        $cas->delete($accxjCjue, $accxjCcat);
    }
?>
<?php

class Inserts {

    public function insert($accxjCjue, $accxjCcat) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("INSERT INTO accxj(accxjCjue,accxjCcat) 
            VALUES (:accxjCjue,:accxjCcat)", array(
            ":accxjCjue" => $accxjCjue,
            ":accxjCcat" => $accxjCcat
        ));
    }

    public function delete($accxjCjue, $accxjCcat) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
            DELETE FROM accxj
            WHERE accxjCjue = :accxjCjue and accxjCcat = :accxjCcat", array(
            ":accxjCjue" => $accxjCjue,
            ":accxjCcat" => $accxjCcat
        ));
    }

}
