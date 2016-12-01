<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Find the max element in an array of integers
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT THE MAX ELEMENT OF AN ARRAY</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php

        function array_max($v) {

            $max=$v[0];

            for($i=1;$i<count($v);$i++) {

              if($v[$i]>$max) {
                $max=$v[$i];
              }
            }

            return $max;

        }

        $v1=array(1,2,3,45,6,7,8,9);
        $v2=array(34,54,23,123,45,78,98,102);

        echo "MAX->".array_max($v1)."<br>";
        echo "MAX->".array_max($v2)."<br>";


      ?>
  </body>
</html>
