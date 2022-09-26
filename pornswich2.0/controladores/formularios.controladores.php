<?php

class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST["nombre"])) {

            $tabla = "registros";
            $datos = array("nombre" => $_POST["nombre"], "correo" => $_POST["email"], "pswd" => $_POST["pswd"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

static public function ctrSeleccionarRegistros(){
    $tabla = "registros";
    
    $respuesta = ModeloFormularios::mdlRegistro($tabla); 

return $respuesta;
}

 



}
