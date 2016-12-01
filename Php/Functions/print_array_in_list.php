<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description:
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT AN ARRAY CONTENT IN LIST</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php

        //Declaring the function with just one parameter, the array
        //The function does not return nothing, just prints the list
        function list_of_array($v) {
          echo "<ul>";

          //Travesing the array. We use for each because we want the function to Work
          //with both indexed and associative arrays
          foreach ($v as $valor) {
            echo "<li>$valor</li>";
          }
          echo "</ul>";

        }

        //Declaring two arrays
        $data=array(1,2,3,4,6);
        $data2=array("A" => 1,"B"=>2,"C"=>3,"D"=>4,"E"=>6);

        //Calling the function with one array
        list_of_array($data2);

      ?>
  </body>
</html>
