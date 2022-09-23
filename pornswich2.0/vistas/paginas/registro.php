<head>

</head>
<h1>REGISTRO</h1>
<form class="p-5 bg-light" method="POST">

<!-- TODO: hacer datos obligatorios -->

<div class="form-group">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="Entra el email:" name="email" />
    </div>


    <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>

        <div class="input-group">

            <div class="input-group-prenpend">
                <!-- <span class="input-group-text">
                    
                    TODO:arrreglar esto añadir logos en las diferentes entradas #2 25
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-solid fa-user"></i>
                    
                </span> -->
            </div>

            <input type="nombre" class="form-control" id="nombre" placeholder="Entra el nombre:" name="nombre" />
        </div>


    </div>

    <div class="mb-3">
        <label for="pwd" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="pwd" placeholder="Entra la contraseña:" name="pswd" />
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

    <button type="submit" class="btn btn-primary">
        Enviar
    </button>
</form>