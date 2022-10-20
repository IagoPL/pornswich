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

    static public function ctrFormularioVideos()
    {

        if (isset($_POST["nombre_video"])) {

            $tabla = "videos";
            $datos = array("nombre_video" => $_POST["nombre_video"], "enlace" => $_POST["enlace"], "autor" => $_POST["autor"], "descripcion" => $_POST["descripcion"]);

            $respuesta = ModeloFormularios::mdlNuevoVideo($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros()
    {
        $tabla = "videos";

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

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>
        
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }

                window.location = "index.php?pagina=inicio";
            
                </script>';

                echo '<div class="alert alert-success"> Ingreso correcto </div>';
                
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
