<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description:  Associative arrays

    Create 2 associative arrays with the following elements (as you may notice the keys are the same in both)

    ("2222222X" => "Pepe" ,"3333333X" =>"Manuel", "4444444X" => "José", "5555555X" => "Rosa")

    ("2222222X" => "Pérez" ,"3333333X" =>"Jiménez", "4444444X" => "Martínez", "5555555X" => "Rodríguez )

    Then create an embedded PHP programa that writes a table where the each row contains the name and the last name
    of each of one the IDs. Like this.

    | Name | LastName |
    | Pepe | Perez    |
    Date: November 2015
    Reference: http://php.net/manual/es/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02-2. Solution</title>
    <style>
       table,td,th {
         border: 1px solid black;
       }
       table {
         border-collapse: collapse;
       }
    </style>
  </head>
  <body>
    <!-- OPENING THE TABLE AND CREATING THE HEADER ROW -->
    <table>
      <tr>
        <th>
          Name
        </th>
        <th>
          LastName
        </th>
      </tr>
    <?php

        //Declaring the arrays
        $v1=array("2222222X" => "Pepe" ,"3333333X" =>"Manuel", "4444444X" => "José", "5555555X" => "Rosa");
        $v2=array("2222222X" => "Pérez" ,"3333333X" =>"Jiménez", "4444444X" => "Martínez", "5555555X" => "Rodríguez");

        //Traversing the first array. I will need both the key and the value
        foreach  ($v1 as $key => $value) {
          //Printing Name and LastName (as the key is the same in both arrays)
          echo "<tr><td>$value</td><td>$v2[$key]</td></tr>";
        }

    ?>

    <!-- CLOSING THE TABLE -->
    </table>

  </body>
</html>
