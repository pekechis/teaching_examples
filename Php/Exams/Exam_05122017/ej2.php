<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
        <?php

         include_once ("funciones.php");

         $c=["-","X","-","-","X","-","X","-","-","X","X"];

         echo "Número de X =".(numveces($c,"X"))."<br>";
         echo "Número de - =".(numveces($c,"-"));

        ?>

    </body>
</html>
