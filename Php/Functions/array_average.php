<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Creating a Function that calculates the average value of an indexed array
    of integer. The function is defined in library.php
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
               http://php.net/manual/function.include.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATE THE AVERAGE OF AN ARRAY OF INTEGERS</title>
    </head>
  <body>
      <?php

        //Including the file where array_average is defined
        include_once("library.php");

        //Declaring the array with the data
        $data=array(23,23,45,56,78,99,100,200);

        //Printing the average in the screen
        echo "The average is:".array_average($data);


      ?>
  </body>
</html>
