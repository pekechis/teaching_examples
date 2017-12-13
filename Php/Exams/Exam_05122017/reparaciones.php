<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Reparaciones</title>
  </head>
  <body>
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
      $query="SELECT * from REPARACIONES";

      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdReparaciones</th>
              <th>Matricula</th>
              <th>Fecha Entrada</th>
              <th>Km</th>
              <th>Avería</th>
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
                echo "<td><a href='resumen.php?id=".$obj->IdReparacion.
                "'>".$obj->IdReparacion."</a></td>";
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

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
  </body>
</html>
