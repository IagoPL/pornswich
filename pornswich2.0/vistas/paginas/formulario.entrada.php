<head>

</head>
<h1>ENTRADA DE VIDEO</h1>
<form class="p-5 bg-light" method="POST">

    <!-- TODO: hacer datos obligatorios -->

    <div class="form-group">

        <label for="nombre_video" class="form-label">Titulo del video</label>
        <input type="nombre_video" class="form-control" id="nombre_video" placeholder="Entra el Titulo del video:" name="nombre_video" required />


        <div class="form-group ">

            <label for="enlace" class="form-label">Enlace</label>
            <input type="enlace" class="form-control" id="enlace" placeholder="Entra el Enlace:" name="enlace" required />


        </div>

        <div class="form-group ">

            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" placeholder="Entra el Autor:" name="autor" required />


        </div>

        <div class="form-group mb-3">

            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" placeholder="Entra el Descripción:" name="descripcion" required />


        </div>




        <?php


        $registro = ControladorFormularios::ctrFormularioVideos();

        if ($registro == "oky dokie") {


            echo '<script>
        
            if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
        
        </script>';

            echo '<div class="alert alert-success">Registro exitoso</div>';
        }


        ?>

        <button type="submit" class="btn btn-warning">
            Enviar
        </button>
</form>