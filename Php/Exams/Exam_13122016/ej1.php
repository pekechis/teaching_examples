<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examn 13-12-2016</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <table border="1px solid black">
        <thead>
          <tr>
            <td>Number</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
        </thead>
        <tbody>
      <?php
        for ($i=1;$i<=100;$i++) {
          echo "<tr>";
          echo "<td>$i</td>";

          //for ($j=2;$j<=5;$j++) {
          //  if ($j%2==0) {
          //    echo "<td>X</td>";
          //  } else {
          //    echo "<td>-</td>";
          //  }
          //}

          if ($i%2==0) {
            echo "<td>X</td>";
          } else {
            echo "<td>-</td>";
          }

          if ($i%3==0) {
            echo "<td>X</td>";
          } else {
            echo "<td>-</td>";
          }

          if ($i%4==0) {
            echo "<td>X</td>";
          } else {
            echo "<td>-</td>";
          }

          if ($i%5==0) {
            echo "<td>X</td>";
          } else {
            echo "<td>-</td>";
          }

          echo "</tr>";
        }
      ?>
        </tbody>
    </table>
  </body>
</html>
