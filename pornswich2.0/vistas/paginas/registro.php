<head>

</head>
<h1>REGISTRO</h1>
<form class="p-5 bg-light" method="POST">

    <!-- TODO: hacer datos obligatorios -->

    <div class="form-group">

        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="Entra el email:" name="email" required /> 


    <div class="form-group ">

        <label for="nombre" class="form-label">Nombre</label>
        <input type="nombre" class="form-control" id="nombre" placeholder="Entra el nombre:" name="nombre" required />


    </div>

    <div class="form-group mb-3">

        <label for="pwd" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="pwd" placeholder="Entra la contraseña:" name="pswd" required />

    </div>


    <?php

    // $registro = new ControladorFormularios();
    // $registro -> ctrRegistro(); TODO: mirar si borrar despues
    // echo $registro; 

    $registro = ControladorFormularios::ctrRegistro();

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