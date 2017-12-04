<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: PHP Basics Exam 25-11-205 - Exercise 4.1. - Solution
                 Show a table with the content of "REPARACION" table
                 The id of each "REPARACIONES" must be passed to ex42.php
    Date: November 2015
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4.1 - Solution</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {


          if ($result->num_rows===0) {
            //NO RESULTS RETURNED FROM THE QUERY
            echo "<p>No results returned from the query</p>";
          } else {

            //GOT SOME RESULTS TO SHOW!!!!

      ?>

            <!-- PRINT THE TABLE AND THE HEADER -->
            <table style="border:1px solid black">
            <thead>
              <tr>
                <th>ID</th>
                <th>matricula</th>
                <th>Fecha de entrada</th>
                <th>Km</th>
                <th>Averia</th>
                <th>Fecha Salida</th>
                <th>Reparado</th>
                <th>Observaciones</th>
            </thead>

      <?php

            //FETCHING OBJECTS FROM THE RESULT SET
            //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
            while($obj = $result->fetch_object()) {
                //PRINTING EACH ROW
                echo "<tr>";
                echo "<td><a href='ex42.php?id=".$obj->IdReparacion."'>".$obj->IdReparacion."</a></td>";
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td>".$obj->Km."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaSalida."</td>";
                echo "<td>".$obj->Reparado."</td>";
                echo "<td>".$obj->Observaciones."</td>";
                echo "</tr>";
            }

            //Free the result. Avoid High Memory Usages
            $result->close();
            unset($obj);
            unset($connection);

        } //END OF THE IF CHECKING THE NUMBER OF RESULTS

      } else {
        echo "<p>INVALID QUERY</p>";
      }

    ?>
  </body>
</html>
