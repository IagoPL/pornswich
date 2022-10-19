<?php
require_once "conexion.php";

class ModeloFormularios
{


    static public function mdlRegistro($tabla, $datos)
    {

        // statement -> declaracion 

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,correo, pswd) VALUES (:nombre,:correo,:pswd)");

        /*bindParam(), vincula una vatriable php a un parametro de sustitucion con nombre o de signo de interrogacion correcpondientes a la secuencia sql que fue usada para preparar la centencia*/

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":pswd", $datos["pswd"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "oky dokie";
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor)
    {

        if ($item == null && $valor == null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
    
            return $stmt->fetchAll();

        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();
    
            return $stmt->fetch();

        }


    }
}
