<?php
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
                <th>Duracion</th>
                <th>Acciones</th>

            </tr>
    </thead>
    <tbody>

    <?php foreach ($usuarios as $key => $value) : ?>

        <tr>
            <td><?php echo $value ["nombre"]; ?> </td>
            <td><?php echo $value ["correo"]; ?></td>
            <td><?php echo $value ["id"]; ?></td>
            
            

            <td>
                <div class="btn-group">

                    <button class="btn btn-warning">Editar</button>
                    <!-- TODO: meter logos -->
                    <button class="btn btn-danger">Borrar</button>

                </div>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>