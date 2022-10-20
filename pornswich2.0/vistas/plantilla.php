<?php
session_start(); //TODO: arreglar esto
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>practica</title>

  <!-- #font awesome #-->
  <script src="https://kit.fontawesome.com/8877593f2a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--# boostrap #-->
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>


  <!-- logo -->
  <div class="container-fluid">
    <h3 class="text-center py-3">
      LOGO
    </h3>
  </div>

  <div class="container-fluid bg-light">
    <div class="container">
      <ul class="nav nav-justified py2 nav-pills">


        <?php if (isset($_GET["pagina"])) : ?>

          <?php if (($_GET["pagina"]) == "inicio") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=inicio">HOME</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=inicio">HOME</a>
            </li>


          <?php endif ?>

          <?php if (($_GET["pagina"]) == "registro") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=registro">REGISTRO</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=registro">REGISTRO</a>
            </li>


          <?php endif ?>

          <?php if (($_GET["pagina"]) == "ingreso") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=ingreso">INGRESO</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=ingreso">INGRESO</a>
            </li>

          <?php endif ?>

          <?php if (($_GET["pagina"]) == "formulario.entrada") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=formulario.entrada">NUEVO VIDEO</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=formulario.entrada">NUEVO VIDEO</a>
            </li>


          <?php endif ?>

          <?php if (($_GET["pagina"]) == "salir") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=salir">SALIR</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=salir">SALIR</a>
            </li>
          <?php endif ?>

        <?php else : ?>

          <!-- GET: $GET[variable] son variables que se pasan como parametros a traces de una URL
        cuendo es la primera variable se marca con ? el inicio
        para concatenar mas se hacen con & -->

          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio">HOME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso">INGRESO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=registro">REGISTRO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=formulario.entrada">NUEVO VIDEO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir">SALIR</a>
          </li>

        <?php endif ?>

      </ul>
    </div>
  </div>



  </div>



  <div class="container-fluid">
    <div class="container py-5">
      <?php

      // isset() determina si una variable esta definida y no es null

      if (isset($_GET["pagina"])) {

        if (
          $_GET["pagina"] == "registro" ||
          $_GET["pagina"] == "ingreso" ||
          $_GET["pagina"] == "inicio" ||
          $_GET["pagina"] == "editar" ||
          $_GET["pagina"] == "salir" ||
          $_GET["pagina"] == "formulario.entrada"
        ) {
          include "paginas/" . $_GET["pagina"] . ".php";
        } else {
          // TODO: continuar esto  
          include "paginas/error404.php";
        }
      } else {
        include "paginas/registro.php";
      }



      ?>
    </div>
  </div>


</body>

</html>