<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Write a script that gets the current month and prints one of the following responses,
    depending on whether it's August or not:

    It's August, so it's really hot.
    Not August, so at least not in the peak of the heat.

    **Note:** You must use php date() function


    Date: November 2016
    Reference: http://www.php.net
    Requires: Php date() function and if-then clause
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basics 2016. Ex03</title>
  </head>
  <body>
    <?php
      //Let's get the month using date function
      $month=date("m");

      //If-then control structure
      if ($month=="8") {
        echo "It's August, so it's really hot.";
      } else {
        echo "Not August, so at least not in the peak of the heat.";
      }

    ?>
  </body>
</html>
