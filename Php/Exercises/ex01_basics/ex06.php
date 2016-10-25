<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: EXERCISE 06 - SOLUTION
                  Type a program that using date() function writes "Out of Service" if
                  we're not in the first ten days of the current month or "Active Service"
                  on the contrary
    Date: October 2015
    Reference: http://www.php.net // http://php.net/manual/function.date.php
               http://php.net/manual/es/function.intval.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 06: Using date function</title>
  </head>
  <body>
      <?php
        //Stores the day of the month in a var
        $day_of_month=date("d");
        //Convert the string to integer
        $day_of_month= intval($day_of_month);

        //Check which one in greater
        if ($day_of_month>20) {
          echo "OUT OF SERVICE";
        } else {
          echo "ACTIVE SERVICE";
        }
      ?>
  </body>
</html>
