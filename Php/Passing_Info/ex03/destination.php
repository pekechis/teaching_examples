<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php
        if (empty($_GET)) {
          echo "No se han mandado parámetros";
        } else {
          if (isset($_GET["nombre"])) {
            echo "Sólo tengo el nombre<br>";
            echo $_GET["nombre"];
          } else if (isset($_GET["apellidos"])) {
            echo "Sólo tengo el apellido<br>";
            echo $_GET["apellidos"];
          } else if (isset($_GET["edad"])) {
            echo "Sólo tengo la edad<br>";
            echo $_GET["edad"];
          } else {
            echo "Parámetro no reconocido";
          }
         }
      ?>
    </body>
</html>
