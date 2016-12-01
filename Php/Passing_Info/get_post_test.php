<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET / POST TEST</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>

      <a href="get_post_test.php?id=1">GET</a>
      <form method="post" action="get_post_test.php">
        Name<input type="text" name="name" required><br>
        LastName<input type="text" name="lastname" required><br>
        <p>
          <input type="submit">
        </p>
      </form>

      <?php

          if(isset($_GET)) {
            echo "TENGO GET";
            var_dump($_GET);
          }

          if (isset($_POST)) {
            echo "TENGO POST";
            var_dump($_POST);
          }
      ?>
  </body>
</html>
