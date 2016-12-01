<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Creating a function that print an HTML table into the browser
                screen
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE A FUNCTION FOR PRINTING AN NxM HTML TABLE</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php
          //Declaring the function
          //with 2 parameters, one for the number of rows and
          //one for the number of columns
          //This function doesn't return anything, just print the HTML
          function print_table($numrows, $numcols) {

            echo "<table style=\"border:1px solid black\">";

            //Loop for rows
            for ($i=0;$i<$numrows;$i++) {
              echo "<tr>";

              //Loop for columns
              for ($j=0;$j<$numcols;$j++) {
                echo "<td>$i,$j</td>";
              }
              echo "</tr>";
            }
            echo "</table>";
          }

          //Function call with 5 and 10 values
          print_table(15,15);

      ?>
  </body>
</html>
