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
        $v1=[2,4,6,8];
        $v2=[7,8,9,10];
        $v3=[];

        for ($i=0;$i<sizeof($v1);$i++) {
          $v3[]=$v1[$i];
        }

        for ($i=0;$i<sizeof($v1);$i++) {
          $v3[]=$v2[$i];
        }

        var_dump($v3);
      ?>
    </body>
</html>
