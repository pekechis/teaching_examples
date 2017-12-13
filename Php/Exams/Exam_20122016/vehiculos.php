<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEHICULOS</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "123456", "tf");
      $connection->set_charset("uft8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT v.matricula,v.marca,v.modelo,v.color,max(km) as km
                from vehiculos v join reparaciones r on v.matricula = r.matricula
                group by v.matricula";
      if ($result = $connection->query($query)) {

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>Matricula</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Color</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              $km = $obj->km;
              if ($km>50000) {
                echo "<tr style='background-color:red'>";
              } elseif ($km>30000 && $km<40000) {
                echo "<tr style='background-color:green'>";
              } else {
                echo "<tr>";
              }

                echo "<td><a href='propietario.php?matricula=".$obj->matricula."'>".$obj->matricula."</a></td>";
                echo "<td>".$obj->marca."</td>";
                echo "<td>".$obj->modelo."</td>";
                echo "<td>".$obj->color."</td>";
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
