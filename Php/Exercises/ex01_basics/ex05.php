<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: EXERCISE 05 - SOLUTION
                  Show the greatest number using if structure
    Date: October 2015
    Reference: http://www.php.net // http://php.net/manual/control-structures.if.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 05: The greatest numbers using if</title>
  </head>
  <body>
      <?php
        //Store the values into the two vars
        $v1=230;
        $v2=230;

        //Check which one in greater
        if ($v1>$v2) {
          echo $v1." is greater than ".$v2;
        } elseif ($v2>$v1) {
          echo $v2." is greater than ".$v1;
        } else {
          echo $v1." and ".$v2." are equals";
        }
      ?>
  </body>
</html>
