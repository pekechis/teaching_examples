<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: EXERCISE 04 - SOLUTION
                  Create two vars and show in the screen the result of +,-,* and /
                  between those two vars using round() function
    Date: October 2015
    Reference: http://www.php.net // http://php.net/manual/function.round.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 04: Operating with numbers and using round() function</title>
  </head>
  <body>
      <?php
        //Store the values into the two vars
        $v1=77;
        $v2=23;

        //Showing all the results
        // The operator . concatenates strings
        echo $v1."+".$v2."=".($v1+$v2)."<br>";
        echo $v1."-".$v2."=".round($v1-$v2)."<br>";
        echo $v1."*".$v2."=".round($v1*$v2)."<br>";
        echo $v1."/".$v2."=".round($v1/$v2)."<br>";
      ?>
  </body>
</html>
