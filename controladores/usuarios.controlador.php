<?php

class ControladorUsuarios{

    //LOGIN

    public function ctrIngresarUsuario(){
        if (isset($_POST["ingDocumento"])){
            if (
                preg_match('/^[0-9]+$/', $_POST["ingDocumento"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])
            ){
                $documento = $_POST["ingDocumento"];
                $respuesta = ModeloUsuarios::mdlIngresarUsuario($documento);

                // $tempo=crypt("financiera123",'$2a$07$asdfsdvafdsgf04sdfsadfGAiADeveloper$');
                // var_dump($tempo);
                // exit;

                $passEncriptado = crypt($_POST["ingPassword"],'$2a$07$asdfsdvafdsgf04sdfsadfGAiADeveloper$');

                if (is_array($respuesta)){
                    if ($respuesta["password"] == $passEncriptado && $respuesta["documento_id"]== $documento){
                        $_SESSION["iniciarSesion"] = "ok";
                        echo "<script>window.location = 'inicio';</script>";
                    } else{
                    // var_dump($respuesta);
                    echo  "<br><div class='alert alert-danger'>Usuario o contraseña incorrecto</div>";
                    return;
                    }                      
                }

            }    
            
        }
    } //fin del metodo de ingresar usuario

    //LISTADO DE USUARIOS

    static public function ctrListarUsuarios(){
        $respuesta= ModeloUsuarios::mdlListarUsuarios();
        return $respuesta;
    } //fin del metodo ctrListarUsuarios

    //AGREGAR NUEVOS USUARIOS

    public function ctrAgregarUsuario(){

        
        if (isset($_POST["nuevoTipoDocumento"])  && 
        isset($_POST["nuevoDocumento"])  && 
        isset($_POST["nuevoNombre"])  && 
        isset($_POST["nuevoApellido"])  && 
        isset($_POST["nuevoCorreo"])  && 
        isset($_POST["nuevoFechaNacimiento"])  && 
            isset($_POST["nuevoRol"]))




            {
                // echo "entrando a agregar usuario";
                // exit;
                if (
                preg_match('/^[0-9]+$/', $_POST["nuevoDocumento"]) &&
                preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+$/', $_POST["nuevoApellido"])
              ) {

                $tabla="usuarios";
                $passEncriptado = $_POST["nuevoDocumento"];

                $passEncriptado = crypt($_POST["nuevoDocumento"],'$2a$07$asdfsdvafdsgf04sdfsadfGAiADeveloper$');

                $datos = array(
                  "tipoDocumento" => $_POST["nuevoTipoDocumento"],
                  "documentoId" => $_POST["nuevoDocumento"],
                  "nombres" => $_POST["nuevoNombre"],
                  "apellidos" => $_POST["nuevoApellido"],
                  "correo" => $_POST["nuevoCorreo"],
                  "fechaNacimiento" => $_POST["nuevoFechaNacimiento"],
                  "rol" => $_POST["nuevoRol"],
                  "password" => $passEncriptado
                );
                
                $respuesta= ModeloUsuarios::mdlAgregarUsuario($tabla, $datos);

                if($respuesta == "ok"){
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'El usuario ha sido registrado correctamente',
                            showConfirmButton: true,
                            confirmButtonText: 'Aceptar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'Usuarios';
                            }
                        });
                                
                        
                    </script>";
                    // echo "<br><div class='alert alert-success'>El usuario ha sido registrado correctamente</div>";
                }else{
                    echo "<br><div class='alert alert-danger'>Error al agregar el usuario</div>";
                }

        


              }
        }  // fin del isset
    } //fin del metodo ctrAgregarUsuarios

    //MOSTRAR USUARIOS

    static public function ctrMostrarUsuarios($item, $valor) {

        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
        return $respuesta;

    } //fin del metodo ctrMostrarUsuarios

}//fin de la clase ControladorUsuarios