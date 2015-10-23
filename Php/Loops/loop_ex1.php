<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: BASIC LOOPS EXAMPLES
    Date: October 2015
    Reference: http://php.net/manual/en/control-structures.while.php
    http://php.net/manual/en/control-structures.do.while.php
    http://php.net/manual/en/control-structures.for.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC LOOPS EXAMPLES</title>
  </head>
  <body>
      <?php
        //SHow the number between 0 and 10 using while

        $i = 0; //$i is a var used as an index
        //The content of the while loop is repeated while
        //the condition $i<=10 is true
        echo "LOOP USING WHILE<br>";
        while ($i<=10) {
          echo $i."<br>"; //Show the number in the screen
          $i++; //Increment the value of the variable
        }

        //The same example using a for loop
        // for(initialize;end_condition;update_on_each_loop)
        echo "LOOP USING FOR<br>";
        for ($i=0;$i<=10;$i++) {
          echo $i."<br>"; //Show the number in the screen
        }

        //The same example using a do---while loop
        echo "LOOP USING DO--WHILE<br>";
        $i=0;
        do {
          echo $i."<br>"; //Show the number in the screen
          $i++;
        } while ($i<=10);

      ?>
  </body>
</html>
