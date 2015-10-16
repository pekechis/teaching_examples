<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: HOW TO DEFINE AND USE CONSTANTS IN PHP
    Date: October
    Reference:
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <!-- PHP BLOCK -->
      <?php
          //DEFINING A CONSTANT
          // define('name_of_the_constant', value)
          // the value never changes
          define("PI", 3.14);
          define("SALUDO","HOLA");

          //USING A CONSTANT
          //Warning: No quotes used
          echo "SHOWING PI USER CONSTANT<br>";
          echo PI."<br>";
          echo "SHOWING SALUDO USER CONSTANT<br>";
          echo SALUDO."<br>";

          //SYSTEM CONSTANTS
          //Some examples and many more
          // __FUNCTION__, __CLASS__
          echo "USING __FILE__ SYSTEM CONSTANT<br>";
          echo __FILE__."<br>"; //Name path of the current file
          echo "USING __DIR__ SYSTEM CONSTANT<br>";
          echo __DIR__."<br>"; //Full path to the current file
          echo "USING __LINE__ SYSTEM CONSTANT<br>";
          echo __LINE__."<br>"; //Number of the current line

      ?>
  </body>
</html>
