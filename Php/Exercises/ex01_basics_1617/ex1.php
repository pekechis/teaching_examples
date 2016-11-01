<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Write a script to reproduce the output below.

    Manipulate only one variable using  simple arithmetic operators to produce
    the values given in the statements.

    Hint: In the script each statement ends with "Value is now $variable."

    Value is now 8.
    Add 2. Value is now 10.
    Subtract 4. Value is now 6.
    Multiply by 5. Value is now 30.
    Divide by 3. Value is now 10.
    Increment value by one. Value is now 11.
    Decrement value by one. Value is now 10.

    Date: November 2016
    Reference: http://www.php.net
    Requires: Basic HTML knowledge // Php vars and arithmetics operators
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics 16-17.Exercise 01</title>
  </head>
  <body>
    <?php

      //Var for storing the results with the initial value
      $a=8;

      //In every sentence I'm going to repeat this part.
      $message="Value is now $a.<br/>";

      echo $message;

      //Adding 2
      $a=$a+2;
      $message="Value is now $a.<br/>";
      echo "Add 2.".$message;

      //Substract 4
      $a=$a-4;
      $message="Value is now $a.<br/>";
      echo "Substract 4.".$message;

      //Multiply by 5
      $a=$a*5;
      $message="Value is now $a.<br/>";
      echo "Multiply by 5.".$message;

      //Divide by 3
      $a=$a/3;
      $message="Value is now $a.<br/>";
      echo "Divide by 3.".$message;

      //Increment by one
      $a++; // or $a=$a+1;
      $message="Value is now $a.<br/>";
      echo "Increment by 1.".$message;

      //Decrement by one
      $a--; // or $a=$a-1;
      $message="Value is now $a.<br/>";
      echo "Decrement by 1.".$message;

    ?>

  </body>
</html>
