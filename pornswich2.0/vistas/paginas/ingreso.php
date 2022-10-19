<h1>INGRESO</h1>
<form>
    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="ingresoEmail" />
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="ingresoPswd" />
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" />
            Remember me
        </label>
    </div>




    <?php

    $ingreso = new ControladorFormularios();
    $ingreso->ctrIngreso();

    ?>

    <button type="submit" class="btn btn-primary">
        Enviar
    </button>


</form>