<?php

class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST["nombre"])) {

            $tabla = "registros";
            $datos = array("nombre" => $_POST["nombre"], "correo" => $_POST["ingresoEmail"], "pswd" => $_POST["pswd"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros()
    {
        $tabla = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);


        return $respuesta;
    }

    //INGRESO

    public function ctrIngreso()
    {

        if (isset($_POST["ingresoEmail"])) {

            $tabla = "registros";
            $item = "correo";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["correo"] == $_POST["ingresoEmail"] && $respuesta["pswd"] == $_POST["ingresoPswd"]) {

                echo 'ingreso correcto';
            } else {

                echo '<script>
        
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
            
                </script>';

                echo '<div class="alert alert-danger"> Usuario no registrado </div>';
            }
        }
    }
}
