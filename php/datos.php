<?php

//session_start();



$nombre = $_GET['Nombre'];
$edad = $_GET['Edad'];
$apellidos = $_GET['Apellidos'];

//$_SESSION["nick_logueado"]=$nombre;

echo "El nombre es ".$nombre." la edad es ".$edad." y los apellidos son ".$apellidos;

$servidor="localhost";
$usuario="root";
$password="usbw";
$bd="daw2";

$con=mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    die("No se ha podido realizar la conexión_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con,"utf8");
    echo "Se ha establecido correctamente la conexión a la base de datos";

    $sql="INSERT INTO `alumnos`(`id`, `nombre`, `apellidos`, `edad`) 
    VALUES (NULL,'$nombre','$apellidos',$edad)";
    
    $consulta=mysqli_query($con,$sql);

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        echo "El insert se ha realizado correctamente";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    <?php
        $sql2="SELECT * FROM `alumnos`";
        $consulta=mysqli_query($con,$sql2);
        while($fila=$consulta->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$fila["id"]."</td>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["apellidos"]."</td>";
            echo "<td>".$fila["edad"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>

    <form action="/logout.php" method="post">

    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
}
?>