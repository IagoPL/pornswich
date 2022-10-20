<?php

if(isset($_SESSION["validarIngreso"])) {

    if($_SESSION["validarIngreso"] != "ok") {

        echo '<script> window.location = "index.php?pagina=ingreso"; </script>';
        return;

} else {

    echo '<script> window.location = "index.php?pagina=ingreso"; </script>';
    return;

}

}


$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
// ver contenido del array
// echo '<pre>';
// print_r($usuarios);
// echo '</pre>';
?>
<table class="table">
    <thead>

        <tr>

            <th>Nombre</th>
            <th>Enlace</th>
            <th>Autor</th>

            <th>Acciones</th>

        </tr>

    </thead>
    <tbody>

        <?php foreach ($usuarios as $key => $value) : ?>

            <tr>
                <td><?php echo $value["nombre_video"]; ?> </td>
                <td><?php echo $value["enlace"]; ?></td>
                <td><?php echo $value["autor"]; ?></td>



                <td>
                    <div class="btn-group">

                        <a href="index.php?pagina=editar&id=<?php echo  $value["id"]; ?>" class="btn btn-warning">Editar</a>
                        <!-- TODO: meter logos -->
                        <button class="btn btn-danger">Borrar</button>

                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>