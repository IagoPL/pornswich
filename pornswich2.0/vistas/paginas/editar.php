<?php
?>
<h1>EDITAR</h1>
<form class="p-5 bg-light" method="POST">

    <!-- TODO: hacer datos obligatorios -->

    <div class="form-group">


        <input type="nombre_video" class="form-control" id="nombre_video" placeholder="editar el Titulo del video:" name="editar_nombre_video" required />


        <div class="form-group ">


            <input type="enlace" class="form-control" id="enlace" placeholder="editar el Enlace:" name="editar_enlace" required />


        </div>

        <div class="form-group ">


            <input type="text" class="form-control" id="autor" placeholder="editar el Autor:" name="editar_autor" required />


        </div>

        <div class="form-group mb-3">


            <input type="text" class="form-control" id="descripcion" placeholder="editar el Descripción:" name="editar_descripcion" required />


        </div>




        <?php


        ?>

        <button type="submit" class="btn btn-warning">
            Enviar
        </button>
</form>