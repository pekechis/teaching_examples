<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: PHP Basics Exam 25-11-205 - Exercise 01 - Solution
    Date: November 2015
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 01 - Solution</title>
  </head>
  <body>
      <?php
      //ARRAY CONTAINING ALL THE DATA
      $data = array(

                '22222222X' => array(
                  "Nombre"=> "Juan",
                  "Apellidos" => "Perez",
                  "Localidad" => "Bormujos"
                ),
                '33333333X' => array(
                  "Nombre"=> "Paco",
                  "Apellidos" => "Fernández",
                  "Localidad" => "Salteras"
                ),
                '44444444X' => array(
                  "Nombre"=> "Manuel",
                  "Apellidos" => "Rodríguez",
                  "Localidad" => "Gines"
                )
      );


      if (count($data)==0) {
        //IF THE ARRAY DOESN'T CONTAIN ANY ELEMENT
        echo "<h1>EMPTY ARRYA</h1>";
      } else {

        //THE ARRAY CONTAINS ELEMENTS

        //START THE LIST
        echo "<ul>";

          //TRAVERSING THE ARRAY
          foreach ($data as $key => $value) {
            //IN THE $KY WE HAVE THE ID
            echo "<li>$key";

            //OPENING THE INNER LIST
            echo "<ul>";

            //THE VALUE OF EACH ELEMENT IS ANOTHER ASSOCIATIVE ARRAY WITH THE NAME OF THE FIELDS AS KEYS
            foreach ($value as $k => $v)  {
              //PRINTING THE NAME OF THE FILED $k AND ITS VALUE $V
              echo "<li>$k : $v</li>";
            }

            //CLOSING THE INNER LIST
            echo "</ul>";

            //CLOSING LIST ITEMS OF THE MAIN LIST
            echo "</li>";
          }

        //CLOSING THE MAIN LIST
        echo "</ul>";
      }

      ?>
  </body>
</html>
