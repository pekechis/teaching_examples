<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <table>
      <?php
        $v=[["A" => 1,"B"=>2,"C"=>3],
            ["D"=>4,"E"=>5,"F"=>6],
            ["G"=>7,"H"=>8,"I"=>9]];

        for ($i=0;$i<sizeof($v);$i++) {
          echo "<tr>";

          foreach ($v[$i] as $k => $value) {
            echo "<td>";
            echo $k.":".$value;
            echo "</td>";
          }
          
          echo "</tr>";
        }
      ?>
      </table>
    </body>
</html>
