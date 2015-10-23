<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
        <div id="main">
          <?php
              $tam=8;
              for ($i=0;$i<$tam;$i++) {
                  echo "<div class='row'>";
                  for ($j=0;$j<$tam;$j++) {
                     if ((($i+$j)%2)==1) {
                       $black="black";
                     } else {
                       $black="";
                     }
                     echo "<div class='cell $black '>$j</div>";
                  }
                  echo "</div>";
              }
          ?>
        </div>
  </body>
</html>
