<!-- recuire establede que el archivo es obligatorio para la pagina si no esta saltara un error-->

<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controladores.php";

require_once "modelos/formularios.modelo.php";




$plantilla = new Controladorplantilla();

$plantilla->crtTraerPlantilla();
