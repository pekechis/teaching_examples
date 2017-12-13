<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: GETTING DATA FROM A MYSQL DATABASE
    Date: November 2015
    Reference: http://php.net/manual/mysqlinfo.api.choosing.php
               http://php.net/manual/book.mysqli.php

-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "tf");
      $connection->set_charset("utf8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM clientes;")) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
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
              //ID is linked with the profile.php passing
              //CodCliente field
              echo "<td><a href='profile.php?id=".$obj->CodCliente.
              "'>".$obj->DNI."</a></td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Apellidos."</td>";
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
