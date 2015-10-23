<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: A MULTIPLICATION TABLE USING PHP LOOPS
    Date: October 2015
    Reference: http://php.net/manual/en/control-structures.while.php
    http://php.net/manual/en/control-structures.do.while.php
    http://php.net/manual/en/control-structures.for.php
    Requieres: HTML & CSS Knowledge
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION TABLE</title>
  </head>
  <body>
      <table style="border: 1px solid black">
        <?php
          $number=5; //The Number I'm going to
          echo "<tr><td>MULTIPLICATION TABLE $number</td></tr>";
          for ($i=1;$i<=10;$i++) {
            $result=$number*$i;
            echo "<tr><td>$number * $i = $result </td></tr>";
          }
        ?>
      </table>
  </body>
</html>
