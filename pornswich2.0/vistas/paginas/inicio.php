<?php
$usuarios = ControladorFormularios::mdlRegistro($tabla);
?>
<table class="table">
    <thead>
        <tr>

            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>

            <td>
                <div class="btn-group">

                    <button class="btn btn-warning">Editar</button>
                    <!-- TODO: meter logos -->
                    <button class="btn btn-danger">Borrar</button>
                
                </div>
            </td>
        </tr>

    </tbody>
</table>