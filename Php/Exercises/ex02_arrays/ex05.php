<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Starting with an empty array and using a loop add to this array the first ten 77 multiple.
                 Once the array is filled show the array contect in an ordered list.
    Date: November 2015
    Reference: http://php.net/manual/es/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02-5 Solution</title>
  </head>
  <body>
      <?php

          //Declaring the empty array
          $v=array();

          //Adding the ten first 77 multiple into the array
          for ($i=1;$i<=10;$i++) {
            //Add the multiple to the array
            $v[]=77*$i;
          }

          //Opening the list
          echo "<ol>";

          //Traversing the array and creating the list items li
          for ($i=0;$i<sizeof($v);$i++) {
            echo "<li>$v[$i]</li>";
          }

          //Closing the list
          echo "</ol>";

      ?>
  </body>
</html>
