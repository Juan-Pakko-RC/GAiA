<?php

class ControladorSedes {

    static public function ctrListarSedes(){
        $respuesta = ModeloSedes::mdlListarSedes();
        return $respuesta;
    }
}


?>