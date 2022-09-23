<?php

class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST["nombre"])) {

            return "oky dokie";
        }
    }
}
