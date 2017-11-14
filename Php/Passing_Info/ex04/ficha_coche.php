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
          echo "No tengo datos de ningún coche";
        } else {
          echo "<table style='border:1px solid black'>";
          echo "<tr>";
          echo "<td><ul>".
               "<li>Matricula:".$_GET["matricula"]."</li>".
               "<li>km:".$_GET["km"]."</li>".
               "<li>Fecha de Matriculación:".$_GET["fecha"]."</li>".
               "<li>Marca:".$_GET["marca"]."</li>".
               "<li>Modelo:".$_GET["modelo"]."</li>".
               "</ul></td>";
          echo "<td><img src=''></td>";
          echo "</tr>";
        }
      ?>
    </body>
</html>
