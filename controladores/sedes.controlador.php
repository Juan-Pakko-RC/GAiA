<?php

class ControladorSedes {

    static public function ctrListarSedes() {
        $respuesta = ModeloSedes::mdlListarSedes();
        return $respuesta;
    }

    static public function ctrAgregarSede() {

        if (
            isset($_POST["nuevoNombreSede"])  &&
            isset($_POST["nuevaDireccionSede"])
        ) {

            $tabla = 'sedes';

            $datos = array (
                "nombreSede" => $_POST["nuevoNombreSede"],
                "direccionSede" => $_POST["nuevaDireccionSede"]
            );

            $respuesta = ModeloSedes::mdlAgregarSede($tabla, $datos);

            if ($respuesta == "ok") {
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'La sede ha sido registrada correctamente',
                            showConfirmButton: true,
                            confirmButtonText: 'Aceptar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'sedes';
                            }
                        });
                                
                        
                    </script>";
                    // echo "<br><div class='alert alert-success'>El usuario ha sido registrado correctamente</div>";
                } else {
                    echo "<br><div class='alert alert-danger'>Error al agregar la sede</div>";
            }      
        }
    }
}


?>