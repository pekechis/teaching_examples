<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: In this PHP exercise, you will put all the loops through their paces.
    Write a script that will print the following to the browser:

    abc abc abc abc abc abc abc abc abc

    xyz xyz xyz xyz xyz xyz xyz xyz xyz

    1 2 3 4 5 6 7 8 9

    1. Item A
    2. Item B
    3. Item C
    4. Item D
    5. Item E
    6. Item F

    Create the 'abc' row with a while loop, the 'xyz' row with a do-while loop, and the last two sections
    with for loops. Remember to include HTML and source code line breaks in your output.
    No arrays allowed in this solution.

    Date: November 2016
    Reference: http://www.php.net
    Requires: Php Loops // Switch
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basics 16-17.Ex04</title>
  </head>
  <body>
    <?php

      //Counter Var
      $counter=0;

      //While Loop Example 9 times
      while ($counter<9) {
        echo "abc ";
        $counter++;
      }

      echo "<br>";

      //Do-while Loop Example 9 times
      do {
        echo "xyz ";
        $counter--;
      } while ($counter>0);

      echo "<br>";

      //For Loop Example
      for($counter=0;$counter<9;$counter++) {
        echo ($counter+1)." ";
      }

      echo "<br>";

      //List Open
      echo "<ol>";
      //Loop. Create the 6 List Elements
      for ($counter=1;$counter<7;$counter++) {
          echo "<li>";
          //Depending on the iteration I print A,B,C....
          switch ($counter) {
            case 1:
              echo "A";
              break;
            case 2:
              echo "B";
              break;
            case 3:
              echo "C";
              break;
            case 4:
              echo "D";
              break;
            case 5:
              echo "E";
              break;
            case 6:
              echo "F";
                break;
          }
          echo "</li>";
      }
      echo "</ol>";

    ?>
  </body>
</html>
