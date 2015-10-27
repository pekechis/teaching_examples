<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: BASIC OPERATIONS USING PHP ARRAYS
    Date: October 2015
    Reference: http://php.net/manual/es/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    <?php
      //Array Creation - old style -
      //Indexed array
      $v1=array("A","B","C");
      //Associative array
      $v2=array("Nombre" => "Pepe","Edad" => 25);
      var_dump($v1);
      var_dump($v2);

      //Array Creation - new style, starting on PHP 5.4
      //Indexed array
      $v3=["A","B","C"];
      //Associative array
      $v4=["Nombre" => "Pepe","Edad" => 25];
      var_dump($v3);
      var_dump($v4);

      //Accessing array elements
      //Accessing the element 1 on a indexed array
      echo $v1[1]."<br>";
      //Accessing the "Edad" element on a associative array
      echo $v2["Edad"]."<br>";

      //Adding new elements to an array
      //Adding a new element (on the last position) to an indexed array
      $v1[]="D";
      var_dump($v1);

      //Adding a new element (with a new key - Localidad - to an associative array
      $v2['Localidad']="Zaragoza";
      var_dump($v2);

      //Traversing an indexed array
      for ($i=0;$i<sizeof($v1);$i++) {
        echo "Elemento $i---->".$v1[$i]."<br> ";
      }

      //Traversing an associative array using keys and values
      foreach ($v2 as $k => $v) {
        echo "Elemento $k---->".$v."<br> ";
      }

      //Traversing an associative array using only values
      foreach ($v2 as $v) {
        echo "Elemento ->".$v."<br> ";

      }
    ?>
  </body>
</html>
