<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php

        $marca =$_GET['marca'];

        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "tf", "12345", "tf");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        //MAKING A SELECT QUERY
        /* Consultas de selección que devuelven un conjunto de resultados */
          $query="SELECT count(*) as num FROM vehiculos where marca='$marca'";
        if ($result = $connection->query($query)) {

          $obj = $result->fetch_object();
              echo "Vehiculos atendidos $marca->".$obj->num;
          

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECK


      ?>

      <p><a href="vehiculos.php">Volver</a></p>
  </body>
</html>
