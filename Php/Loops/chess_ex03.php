<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Creating a CHESS using PHP Loops
    Date: October
    Reference: http://php.net/manual/en/control-structures.while.php
    http://php.net/manual/en/control-structures.do.while.php
    http://php.net/manual/en/control-structures.for.php
    Requires: HTML & CSS
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHESS BOARD WITH PHP LOOPS</title>
    <link rel="stylesheet" type="text/css" href="style_chess.css">
  </head>
  <body>
        <!-- MAIN CONTAINER - CENTERED USING CSS -->
        <div id="main">
          <?php
              //SIZE OF THE CHESS BOARD
              $tam=4;
              for ($i=0;$i<$tam;$i++) {
                  echo "<div class=\"row\">";
                  //CREATING THE ROW
                  for ($j=0;$j<$tam;$j++) {
                     //IF THE FIRST CELL ON THE UPPER RIGHT CORNER IS WHITE AND
                     //POSITION 0,0
                     //BLACK CELLS ARE THOSE WITH ODD $i+$j
                     if ((($i+$j)%2)==1) {
                       $black="black";
                     } else {
                       $black="";
                     }
                     echo "<div class=\"cell $black \"></div>";
                  }
                  echo "</div>";
              }
          ?>
        </div>
  </body>
</html>
