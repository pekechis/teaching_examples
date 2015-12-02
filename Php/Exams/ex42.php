<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: PHP Basics Exam 25-11-205 - Exercise 4.2. - Solution
                 Get the REPARACION Id passed using get to the scripts and
                 show the info of all the RECAMBIOS used in that REPARACION
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

        //CHECK IF THE PARAMETER IS PRESENT
        if (isset($_GET['id'])) {

          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          //BUILDING THE QUERY
          $query="SELECT RECAMBIOS.* FROM Incluyen JOIN RECAMBIOS
           ON Incluyen.IdRecambio=RECAMBIOS.IdRecambio WHERE Incluyen.IdReparacion=".$_GET["id"];


          if ($result = $connection->query($query)) {

            //QUERY OK
            if ($result->num_rows==0) {
              //NO ROWS RETURNED FROM THE QUERY
              echo  "<p>No RECAMBIOS used in the REPARACION</p>";
            } else {


              //GOT SOME RESULTS
              echo "<table>";

              while($obj = $result->fetch_object()) {
                  //PRINTING EACH ROW
                  echo "<tr>";
                  echo "<td>".$obj->IdRecambio."</td>";
                  echo "<td>".$obj->Descripcion."</td>";
                  echo "<td>".$obj->UnidadBase."</td>";
                  echo "<td>".$obj->PrecioReferencia."</td>";
                  echo "<td>".$obj->Stock."</td>";
                  echo "</tr>";
              }

              echo "</table>";

              //Free the result
              $result->close();
              unset($obj);
              unset($connection);
            }

          } else {
            echo "INVALID QUERY";
          }


        } else {
          //NO $_GET["id"] present
          echo "NO REPARACION SELECTED";
        }

      ?>
</body>

</html>
