<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Creating a function that returns if an indexed array of strings contains
                a given string
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION TO SEARCH AN STRING IN AN ARRAY</title>
    </head>
  <body>
      <?php

        //Declarring the function with two parameters
        // $v is the array where I'm going to search
        // $s is the string to find
        function contains($v,$s) {

          //Traversing the indexed array
          for ($i=0;$i<sizeof($v);$i++) {
            //If $v[$i] is equal to the string the array contains the string
            if ($v[$i]==$s) {
              return true;
            }
          }

          //The string has not been found in any element.
          return false;
        }

        //Declaring the indexed array
        $data=array("HELLO","GOODBYE","SEE YOU LATER","F*** YOU");


        if (contains($data,"HELLLO")) {
          //The array constains "HELLO"
          echo "YES";
        } else {
          //HELLO IS NO IN THE ARRAY
          echo "NO";
        }

      ?>
  </body>
</html>
