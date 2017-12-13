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
        <thead>
          <th>Color Name</th>
          <th>Hex Code</th>
        </thead>
        <tbody>
          <?php
           $c=["Blanched Almond" => "#FFEBCD",
              "CadetBlue" => "#5F9EA0",
              "BurlyWood" => "#DEB887",
              "DarkOliveGreen" => "#556B2F",
              "HotPink" => "#FF69B4",
              "PapayaWhip" => "#FFEFD5"];

            foreach ($c as $k => $v) {
              echo "<tr bgcolor='$v'>";
              echo "<td>$k</td><td>$v</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </body>
</html>
