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

        if (empty($_GET)) {
          echo "No tengo de la reparación";
          exit();
        }

        //CREATING THE CONNECTION
        $connection = new mysqli("192.168.1.30", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $reparacion = $_GET['id'];

        $query = "SELECT Nombre,Apellidos, Direccion
                  FROM FACTURAS f JOIN CLIENTES c
                  ON f.codcliente = c.CodCliente
                  WHERE IdReparacion = $reparacion";

        if ($result= $connection->query($query)) {

            if ($result->num_rows==0) {
              echo "NO SE HA PAGADO LA REPARACIÓN";
            } else {
              $obj = $result->fetch_object();
              echo "CLIENTE:".$obj->Nombre." ".$obj->Apellidos." ".$obj->Direccion."<br>";
            }
        } else {
          "No se han podido recuperar los datos del cliente";
        }

        $query= "SELECT v.Matricula,Marca,Modelo,FechaEntrada
                FROM REPARACIONES r JOIN VEHICULOS v ON
                r.Matricula = v.Matricula
                WHERE IdReparacion=$reparacion";

        if ($result= $connection->query($query)) {
            $obj = $result->fetch_object();
            echo "<br>Matricula:".$obj->Matricula."<br>";
            echo "Marca:".$obj->Marca."<br>";
            echo "Modelo:".$obj->Modelo."<br>";
            echo "Fecha de Entrada:".$obj->FechaEntrada."<br>";

        } else {
          "No se han podido recuperar los datos del vehiculo";
        }

        $query = "SELECT Descripcion, PrecioReferencia, Unidades, Unidades*PrecioReferencia as coste
                  FROM Incluyen i JOIN RECAMBIOS r
                  ON i.IdRecambio = r.IdRecambio
                  WHERE i.IdReparacion=$reparacion";


        if ($result= $connection->query($query)) {

            if ($result->num_rows==0) {
              echo "NO SE HAN UTILIZADO PIEZAS";
            } else {
              while ($obj=$result->fetch_object()) {
                echo "<br>".$obj->Descripcion.": Unidades:".$obj->Unidades." Precio:".$obj->PrecioReferencia.
                " Total Pieza: ".$obj->coste."<br>";
              }
            }
        } else {
          "No se han podido recuperar los datos de los recambios";
        }

        $query="SELECT sum(Unidades*PrecioReferencia) as Total
                FROM Incluyen i JOIN RECAMBIOS r
                ON i.IdRecambio = r.IdRecambio
                WHERE i.IdReparacion=$reparacion";

        if ($result= $connection->query($query)) {
              $obj= $result->fetch_object();
              echo "<br>TOTAL:".$obj->Total;
        } else {
          "No se han podido recuperar el total";
        }


      ?>
    </body>
</html>
