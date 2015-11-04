<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
    <?php if (isset($_POST["correo"])) : ?>

      SI QUE HAS MANDADO DATOS
      <?php var_dump($_POST)  ?>

  <?php else: ?>
    <form action="post_single.php" method="post">
      Nombre:<input type="text" name="nombre" required><br>
      Apellidos:<input type="text" name="apellidos" required><br>
      Email:<input type="email" name="correo" required><br>
      Fecha Nacimiento:<input type="date" name="fecha"><br>
      Edad:<input type="range" min="18" max="25">
      <input type="submit" value="ENVIAR"><br>

    </form>


  <?php endif ?>

  </body>
</html>
