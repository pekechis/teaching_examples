<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Using nested Loops
    Date: October 2016
    Reference: http://www.php.net
    Requires: PHP Knowledge of vars and Loops &&
              HTML basic knowledge
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using nested Loops</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <table>

      <?php

        //Size of the table
        $size=10;

        //Main Loop. Generates as many rows as needed
        for ($i=1;$i<=$size;$i++) {
            echo "<tr>";
            //Secondary Loop.Generates as many cells as needed
            //for echa of the rows
            for ($j=1;$j<=$size;$j++) {
              //Each cell contains its order number
              echo "<td>".(($i-1)*$size+$j)."</td>";
            }
            echo "</tr>";
        }

      ?>

      </table>
  </body>
</html>
