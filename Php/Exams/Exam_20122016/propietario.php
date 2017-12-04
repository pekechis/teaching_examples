<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietario del COCHE</title>
  </head>
  <body>
      <?php
      if (!isset($_GET['matricula'])) {
        echo "No se ha recibido matrícula";
      } else {

        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "tf", "123456", "tf");
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        //MAKING A SELECT QUERY
        /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT nombre,apellidos, direccion, telefono
                  from vehiculos v join clientes c on c.codcliente = v.codcliente
                  where v.matricula='".$_GET["matricula"]."'";

       //Ejecuto la consulta
        if ($result=$connection->query($query)) {

            //Si obtengo algo sólo será una fila (por la estrucutra del a BD)
            $obj = $result->fetch_object();

            //Construyo la lista
            echo "<ul>";
            echo "<li>Nombre:".$obj->nombre."</li>";
            echo "<li>Apellidos:".$obj->apellidos."</li>";
            echo "<li>Dirección:".$obj->direccion."</li>";
            echo "<li>Teléfono:".$obj->telefono."</li>";
            echo "</ul>";

            echo "<a href='vehiculos.php'>Volver</a>";
        } else {
          echo $query;
          echo "No se pudo obtener el propietario";
        }
      }

      ?>
  </body>
</html>
