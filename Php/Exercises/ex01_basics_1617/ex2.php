<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: When you are writing scripts, you will often need to see exactly
    what is inside your variables.

    For this PHP exercise, think of the ways you can do that, then write a script that
    outputs the following, using the echo statement only for line breaks.

    string(5) "Harry"
    Harry
    int(28)
    NULL


    Date: November 2016
    Reference: http://www.php.net
    Requires: Basic HTML knowledge // var_dump() function
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics 16-17.Exercise 02</title>
  </head>
  <body>
      <?php

        //Variables
        $string="Harry";
        $number=28;
        $n=null;

        //Using var_dump will show the content, the type and more infor about the var
        echo var_dump($string)."<br/>";
        echo $string."<br/>";
        echo var_dump($number)."<br/>";
        var_dump($n);

      ?>
  </body>
</html>
