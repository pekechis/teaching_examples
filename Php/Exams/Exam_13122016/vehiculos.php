<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICLES EX 14-12-2016</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "tf");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT matricula, marca,dni, nombre,apellidos
                FROM clientes c JOIN vehiculos v on c.codcliente=v.codcliente";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>Matricula</th>
              <th>Marca</th>
              <th>DNI</th>
              <th>Nombre</th>
              <th>Apellidos</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->matricula."</td>";
              $marca=$obj->marca;
              echo "<td><a href='marca.php?marca=$marca'>".$obj->marca."</a></td>";
              $dni= $obj->dni;
              echo "<td><a href='cliente.php?dni=$dni'>".$obj->d."</a></td>";              echo "<td>".$obj->nombre."</td>";
              echo "<td>".$obj->apellidos."</td>";
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
