<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: PHP Basics Exam 25-11-205 - Exercise 03 - Solution
                 Show in a HTML list all "RECAMBIOS" stored in the DB with a stock less
                  than the quantity specified into the form
    Date: November 2015
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

      <!-- FORM -->
      <!-- MAKING stocknumber a NUMBER an a REQUIRED FILE -->
      <!-- REDUCE VALIDATION PROBLEMS IN THE SERVER SIDE -->
      <form action="ex03.php" method="post">
        <p><input type="number" name="stocknumber" required></p>
        <input type="submit" value="Send">
      </form>

      <?php

        //CHECK IF WE ARE COMING FROM A FORM SUBMITTING
        if (isset($_POST["stocknumber"])) {

            //CREATING THE CONNECTION TO THE DATABASE
            $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            //TESTING IF THE CONNECTION WAS RIGHT
            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            //MAKING A SELECT QUERY
            $stock=$_POST["stocknumber"];
            $query = "SELECT * FROM RECAMBIOS WHERE Stock<$stock";


            if ($result = $connection->query($query)) {

                //CHECKING IF THE QUERY RETURNED ANY RESULT
                if ($result->num_rows==0) {

                  echo "<p>NO 'RECAMBIO' WITH A STOCK LOWER THAN ".$stock."</p>";

                } else {

                  //IF ANY RESULT, LET'S SHOW THE RESULTS

                  //OPENING THE LIST
                  echo "<ul>";
                  while($obj = $result->fetch_object()) {

                      //PRINTING EACH LIST ITEM
                      echo "<li>";
                      echo $obj->IdRecambio."<br>";
                      echo $obj->Descripcion."<br>";
                      echo $obj->UnidadBase."<br>";
                      echo $obj->Stock."<br>";
                      echo $obj->PrecioReferencia."<br>";
                      echo "</li>";
                  }

                  //CLOSING THE LIST
                  echo "</ul>";

                }

                //FREE MEMORY
                $result->close();
                unset($obj);
                unset($connection);

            } else {

                //IF RESULT IS FALSE...INVALID QUERY
                echo "<p>INVALID QUERY</p>";
            }
        }
      ?>
  </body>
</html>
