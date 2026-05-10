<?php

require_once "conexion.php";

class ModeloSedes {

    static public function mdlListarSedes() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM sedes");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function mdlAgregarSede($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (descripcion_sede, direccion_sede)
        VALUES (:nombreSede, :direccionSede)");
        $stmt->bindParam(":nombreSede", $datos["nombreSede"], PDO::PARAM_STR);
        $stmt->bindParam(":dreccionSede", $datos["direccionSede"], PDO::PARAM_STR);
        if ($stmt->execute()){

            return "ok";

        }else{

            return "error";
        }

    }
}


?>