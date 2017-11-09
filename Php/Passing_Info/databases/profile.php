<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
      <?php
        if (!isset($_GET['id'])) {
          echo "No client selected";
        } else {
          $cliente=$_GET['id'];

          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "tf", "12345", "tf");
          $connection->set_charset("utf8");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $consulta="SELECT * FROM clientes WHERE
          codcliente='$cliente'";

          $result=$connection->query($consulta);

          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();


            echo "<p><img src='' width='250px' height='250px'></p>";

            echo "<p><b>Name-> </b>".$obj->Nombre."</p>";
            echo "<p><b>LastName-> </b>".$obj->Apellidos."</p>";
            echo "<p><b>ID-> </b>".$obj->DNI."</p>";
            echo "<p><b>Address-> </b>".$obj->Direccion."</p>";
            echo "<p><b>Phone-> </b>".$obj->Telefono."</p>";

          }
        }

      ?>

  </body>
</html>
