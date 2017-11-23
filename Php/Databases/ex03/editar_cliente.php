<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST and HTML forms
                 using the same file
    Date: November 2015
    Reference: http://www.w3schools.com/tags/tag_form.asp
               http://www.w3schools.com/tags/tag_input.asp
               http://php.net/manual/reserved.variables.post.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php

        if (empty($_GET)) {
          echo "No se han recibido datos del cliente";
          exit();
        }


      ?>

      <?php if (!isset($_POST["dni"])) : ?>

        <?php

          //CREATING THE CONNECTION
          $connection = new mysqli("192.168.1.30", "root", "Admin2015", "tf",3316);
          $connection->set_charset("uft8");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
          $query="SELECT * from CLIENTES where CodCliente='".$_GET["cc"]."'";

          if ($result = $connection->query($query))  {

            $obj = $result->fetch_object();

            if ($result->num_rows==0) {
              echo "NO EXISTE ESE CLIENTE";
              exit();
            }

            $codigo = $obj->CodCliente;
            $nombre = $obj->Nombre;
            $apellidos = $obj->Apellidos;
            $direccion = $obj->Direccion;
            $telefono = $obj->Telefono;
            $dni = $obj->DNI;

          } else {
            echo "No se han recuperar los datos cliente";
            exit();
          }

        ?>
        <form method="post">
          <fieldset>
            <legend>Información del Cliente</legend>
            <span>Nombre:</span><input value='<?php echo $nombre; ?>' type="text" name="nombre" required><br>
            <span>Apellidos:</span><input value='<?php echo $apellidos; ?>'type="text" name="apellidos" required><br>
            <span>DNI:</span><input type="text" value='<?php echo $dni; ?>'name="dni" required><br>
            <span>Dirección:</span><input type="text" name="direccion" value='<?php echo $direccion; ?>'><br>
            <span>Teléfono: </span><input type="text" name="telefono" value='<?php echo $telefono; ?>'><br>
            <input type="hidden" name="codigo" value='<?php echo $codigo; ?>'>
            <p><input type="submit" value="Actualizar"></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['dni']. Coming from a form submit -->
      <?php else: ?>

        <?php

        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $dni = $_POST["dni"];

        //CREATING THE CONNECTION
        $connection = new mysqli("192.168.1.30", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        //MAKING A SELECT QUERY
        /* Consultas de selección que devuelven un conjunto de resultados */
        $query="update CLIENTES set DNI='$dni',Nombre='$nombre',
        Apellidos='$apellidos',Direccion='$direccion',Telefono='$telefono'
        WHERE CodCliente='$codigo'";

        echo $query;
        if ($result = $connection->query($query)) {
          echo "Datos actualizados";
        } else {
          echo "Error al actualizar los datos";
        }

        ?>

      <?php endif ?>

  </body>
</html>
