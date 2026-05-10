<?php

require_once "conexion.php";

class ModeloSedes {

    static public function mdlListarSedes(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM sedes");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


?>