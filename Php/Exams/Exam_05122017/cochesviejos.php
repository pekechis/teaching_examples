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
    <title>COCHES VIEJOS</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <?php if (!isset($_POST["km"])) : ?>
        <form method="post">
            <label>KM:</label>
            <input type="number" name="km" requiered /><br>
            <input type="submit" value="Buscar">
        </form>


      <?php else: ?>

        <?php

        //CREATING THE CONNECTION
        $connection = new mysqli("192.168.1.30", "root", "Admin2015", "tf",3316);

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $km = $_POST['km'];
        //MAKING A SELECT QUERY
        /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT *, max(km) as total
                  FROM VEHICULOS v JOIN REPARACIONES r on
                  v.matricula=r.matricula
                  group by v.matricula
                  having max(km) > $km";


        if($result = $connection->query($query)) {

            echo "<table>";
            echo "<tr><th>Matricula</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Color</th>
                      <th>Km</th></tr>";

            while ($obj = $result->fetch_object()) {
              echo "<tr>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "</tr>";
            }

            echo "</table>";

        } else {
          echo "Imposible recuperar los datos";
        }

        ?>
      <?php endif ?>

  </body>
</html>
