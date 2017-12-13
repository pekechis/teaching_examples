<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR FACTURA</title>

  </head>
  <body>

      <?php

      //Voy a necesitar en ambos casos conectarme a la BD
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "123456", "tf");
      $connection->set_charset("uft8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //Compruebo si vengo de post o si es la primera vez
      if (!isset($_POST['cliente']))  {

      ?>
        <form method="post">
          <select name="cliente" required>
          <?php
            $query="select * from clientes";

            if ($result=$connection->query($query)) {

                while($obj=$result->fetch_object()) {
                  echo "<option value='".$obj->CodCliente."'>".$obj->DNI."-".$obj->Nombre." ".$obj->Apellidos.
                       "</option>";
                }
            } else {
              echo "No se pudieron recuperar los clientes";
            }
          ?>
        </select><br>
          <select name="reparacion" required>
          <?php
            $query="select * from reparaciones";

            if ($result=$connection->query($query)) {

                while($obj=$result->fetch_object()) {
                  echo "<option value='".$obj->IdReparacion."'>".$obj->Matricula." ".$obj->FechaEntrada.
                       "->".$obj->FechaSalida.
                       "</option>";
                }
            } else {
              echo "No se pudieron recuperar los clientes";
            }
          ?>
        </select><br>
          <input type="date" name="fechafactura"><br>
          <input type="submit" value="Insertar Facturas">
        </form>
      <?php

      //Cuando vengo del formulario
      } else {

        $reparacion = $_POST['reparacion'];
        $cliente = $_POST['cliente'];
        $fecha = $_POST['fechafactura'];

        $query= "INSERT INTO facturas VALUES(null,'$fecha','$cliente','$reparacion')";
        echo $query;

        if ($result=$connection->query($query)) {
          echo "Factura Insertado correctamente";
        } else {
          echo "Error al insertar la factura";
        }


      }

      ?>
  </body>
</html>
