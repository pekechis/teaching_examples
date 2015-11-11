<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Solution to ex02-1
    Given an indexed array with the following city names "San Cristóbal","Cucuta","Maracaibo","Caracas"
    create a web page as close as possible to the following image. Use loops and any function needed
    https://github.com/pekechis/teaching_examples/blob/master/Php/Exercises/ex02_arrays/ciudades.jpg
    Date: November 2015
    Reference: http://php.net/manual/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02-1 Solution</title>
  </head>
  <body>
      <?php

        //Declaring the array
        $cities=array("San Cristóbal","Cucuta","Maracaibo","Caracas");

        //Writing the numbers of elements of the array
        echo "<p>Number of elements ".sizeof($cities)."</p>";

        //Traversing the array
        for($i=0;$i<sizeof($cities);$i++) {
          //Writing the index
          echo "City ".$i."<br>";
          //Writing the name of the city
          echo "<h1>$cities[$i]</h1>";
        }

      ?>
  </body>
</html>
