<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: PHP Basics Exam 25-11-205 - Exercise 02 - Solution
                 Create a function that receives 3 arrays of numbers and returns an
                 associative array with the average value of each one of the array.
    Date: November 2015
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02 - Solution</title>
  </head>
  <body>

      <?php

        //DATA ARRAYS
        $edades=array(10,20,30,40,50,60);
        $altura=array(1.75,2.00,1.82,1.72,1.65);
        $peso=array(70,80,120,74,90);

        //DECLARING THE FUNCTION WITH 3 ARRAY ARGUMENTS
        function calculate_average(array $e,array $a,array $p) {

          //ARRAY TO BE RETURNED
          $v=array();

          //CALCULATING THE AVERAGE VALUE OF THE FIRST ARRAY
          $sum=0;
          for ($i=0;$i<count($e);$i++) {
            $sum+=$e[$i];
          }

          //ADDING THE VALUE TO THE ARRAY
          $v["EDAD"]=$sum/count($e);

          //CALCULATING THE AVERAGE VALUE OF THE SECOND ARRAY
          $sum=0;
          for ($i=0;$i<count($a);$i++) {
            $sum+=$a[$i];
          }

          //ADDING THE VALUE TO THE ARRAY
          $v["ALTURA"]=$sum/count($a);

          //CALCULATING THE AVERAGE VALUE OF THE THIRD ARRAY
          $sum=0;
          for ($i=0;$i<count($p);$i++) {
            $sum+=$p[$i];
          }

          //ADDING THE VALUE TO THE ARRAY
          $v["PESO"]=$sum/count($p);



          return $v;
        }

        //SHOWING THE RETURNED ARRAY
        var_dump(calculate_average($edades,$altura,$peso));

      ?>
  </body>
</html>
