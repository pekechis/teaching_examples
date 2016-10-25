<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: EXERCISE 03 - SOLUTION
                 Write a program that stores your name into a variable and then shows
                 Hello your_name using that var.
    Date: October 2015
    Reference: http://www.php.net
    Requires:
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 03: Storing your name in a var</title>
  </head>
  <body>
      <?php
        //Store your name into a var called your_name
        $your_name="Juan Diego";
        //Echo prints the following the string into the file output
        //Using double quotes the vars are replaces with its values
        echo "Hello ".$your_name;
      ?>
  </body>
</html>
