<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description:Create a 10 x 10 table where the background color is gray for even rows
    and red for odd rows. The cells' dimensions must be 50x50 (pixels)
    Date: November 2016
    Reference: http://www.php.net
    Requires: Php Loops // Php If // little CSS Knowledge
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basics 16-17.Ex05</title>
    <style>
      .par {
        background-color: grey;
      }

      .impar {
        background-color: red;
      }

      td {
        width: 50px;
        height: 50px;
      }

    </style>
    </head>
  <body>
      <?php

        //Opening the table
        echo "<table>";

        //Main Loop. One Iteration per row
        for ($i=0;$i<5;$i++) {

          //Opening the row
          if (($i%2)==0) {
            //Even Row
            echo "<tr class='par'>";
          } else {
            //Odd Row
            echo "<tr class='impar'>";
          }

          //Inner Loop. One iteration per column
          for ($j=0; $j<5;$j++) {
            echo "<td></td>";
          }
          //Closing the row
          echo "</tr>";
        }

        //Closing the table
        echo "</table>";
      ?>
  </body>
</html>
