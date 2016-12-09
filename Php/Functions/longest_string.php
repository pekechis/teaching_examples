x<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Find the longest string in an array
    Date: December 2016
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND THE LONGEST STRING IN AN ARRAY</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php

        include_once("library.php");

        $cadenas = ["HELLO","GOOBYE","HERE","XXXXXXXXXXX"];

        echo longest_string($cadenas);

      ?>
  </body>
</html>
