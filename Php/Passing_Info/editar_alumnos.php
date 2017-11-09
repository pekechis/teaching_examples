<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php if (isset($_GET["n"]) && !isset($_POST["name"])) : ?>

        <form method="post">
          <p><label>Name:</label>
          <input type="text" name="name" required value="<?php echo $_GET["n"];?>"></p>
          <p><label>LastName:</label>
          <input type="text" name="lastname" required value="<?php echo $_GET["a"];?>"></p>
          <p><label>Email:</label>
          <input type="email" name="email" required value="<?php echo $_GET["email"];?>"></p>
          <p><input type="submit" value="Editar"></p>
        </form>

      <?php else: ?>
          <?php
              if (empty($_GET)) {
                  echo "No tengo datos del alumno a editar";
              } else {
                echo "<h1>New data</h1>";
                echo "<b>Name:</b>".$_POST["name"]."<br>";
                echo "<b>Lastname:</b>".$_POST["lastname"]."<br>";
                echo "<b>Email:</b>".$_POST["email"]."<br>";
                echo "<a href='alumnos.php'>Volver</a>";
              }
          ?>
      <?php endif ?>

    </body>
</html>
