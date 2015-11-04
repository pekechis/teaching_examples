<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <form action="post_destination.php" method="post">
        Nombre:<input type="text" name="nombre" required><br>
        Apellidos:<input type="text" name="apellidos" required><br>
        Email:<input type="email" name="correo" required><br>
        Fecha Nacimiento:<input type="date" name="fecha"><br>
        Sexo: <input type="radio" name="sexo" value="H">Hombre<br>
        <input type="radio" name="sexo" value="M">Mujer<br>
        <input type="checkbox" name="asignaturas[]" value="LM">LM<br>
        <input type="checkbox" name="asignaturas[]" value="GBD">GBD<br>
        <input type="checkbox" name="asignaturas[]" value="PAR">PAR<br>
        <input type="checkbox" name="asignaturas[]" value="IAW">IAW<br>
        <input type="submit" value="ENVIAR"><br>

      </form>
  </body>
</html>
