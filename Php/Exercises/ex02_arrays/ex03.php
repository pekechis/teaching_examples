<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Given the following array (‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’)
                 write an embedded PHP program that creates a new array with the elements of the first one that starts with "m".
                 Review string related functions : http://php.net/manual/ref.strings.php
    Date: November 2015
    Reference: http://php.net/manual/es/language.types.array.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02-03</title>
  </head>
  <body>
      <?php

        //Declaring the array
        $names=array("roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta");
        $dest=array();

        //Traversing the array
        for ($i=0;$i<sizeof($names);$i++) {

          //I can access string chars like an indexed arrays
          //If the first elements is equal to "m" I add the element to dest
          if ($names[$i][0]=="m") {
            $dest[]=$names[$i];
          }
        }

        //If the dest array has any element I dump it into the screen
        if (sizeof($dest)>0) {
          var_dump($dest);
        }


      ?>
  </body>
</html>
