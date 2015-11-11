<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Given an indexed array of integers find and write the max element into the browser screen
    Date: November 2015
    Reference: http://php.net/manual/es/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02-4 Solution</title>
  </head>
  <body>
    <?php

      //Declaring the array of integers
      $numbers=array(45,67,12,134,541,23,11,23,673,89,20);

      //Var for storing the max value
      $max=0;

      //Traversing the array
      for ($i=0;$i<sizeof($numbers);$i++) {
        //If the current element is greater than max
        //I replace max with the current value
        if ($numbers[$i]>$max) {
          $max= $numbers[$i];
        }
      }

      //Printing the max
      echo "The max value is ".$max;

    ?>
  </body>
</html>
