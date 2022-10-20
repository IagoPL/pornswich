<?php

if (isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET["id"];;
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>

<h1>EDITAR</h1>
<form class="p-5 bg-light" method="POST">

    <!-- TODO: hacer datos obligatorios -->

    <div class="form-group">


        <input type="nombre_video" class="form-control mb-3" id="nombre_video" placeholder="editar el Titulo del video:" name="editar_nombre_video" required value="<?php echo $usuario["nombre_video"]; ?>" />


        <div class="form-group ">


            <input type="enlace" class="form-control mb-3" id="enlace" placeholder="editar el Enlace:" name="editar_enlace" required value="<?php echo $usuario["enlace"]; ?>" />


        </div>

        <div class="form-group ">


            <input type="text" class="form-control mb-3" id="autor" placeholder="editar el Autor:" name="editar_autor" required value="<?php echo $usuario["autor"]; ?>" />


        </div>

        <div class="form-group mb-3">


            <input type="text" class="form-control mb-3" id="descripcion" placeholder="editar el Descripción:" name="editar_descripcion" required value="<?php echo $usuario["descripcion"]; ?>" />

            <input type="hidden" name="idUsuario" required value="<?php echo $usuario["id"]; ?>" />
        </div>




        <?php


        $actualizar = new ControladorFormularios();
        $actualizar->ctrActualizarRegistro();

        ?>

        <button type="submit" class="btn btn-warning">
            Enviar
        </button>
</form>