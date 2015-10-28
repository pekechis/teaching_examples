<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: EXERCISE 09 - SOLUTION
                  Using switch, check if the value of a var is "UP","DOWN","LEFT" or "RIGHT"
                  showing the value in bold into the browser screen.
    Date: October 2015
    Reference: http://www.php.net // http://php.net/manual/es/control-structures.switch.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 09: USING SWITCH</title>
  </head>
  <body>
      <?php
        //Var to store the message
        $message="DOWN";

        switch ($message) {
          case "UP":
            echo "<b>UP</b> SELECTED";
            break;
          case "DOWN":
            echo "<b>DOWN</b> SELECTED";
              break;
          case "LEFT":
            echo "<b>LEFT</b> SELECTED";
            break;
          case "RIGHT":
            echo "<b>RIGHT</b> SELECTED";
            break;
        }
      ?>
  </body>
</html>
