<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar clientes Ciudades</title>
</head>
<body>
<?php if (!isset($_POST["ciudad"])) : ?>
        <form method="post">
          <fieldset>
            <p>Ciudad:<input type="text" name="ciudad" required /></p>
            <p><input type="submit" value="Buscar" />
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
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
            $query="SELECT * from clientes where direccion 
                like '%".$_POST['ciudad']."'";

            if ($result = $connection->query($query)) {

               if ($result->num_rows==0)      {
                   echo "Ningún cliente de la ciudad: ".$_POST['ciudad'];
               } else {
                 //FETCHING OBJECTS FROM THE RESULT SET
                 //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                    echo "<ul>";
                    while($obj = $result->fetch_object()) {
                    //PRINTING EACH ROW
                    echo "<li>";
                    echo "Codigo:".$obj->CodCliente;
                    echo "Nombre: ".$obj->Nombre;
                    echo "Apellidos".$obj->Apellidos;
                    echo "DNI: ".$obj->DNI;
                    echo "Direccion: ".$obj->Direccion;
                    echo "Teléfono".$obj->Telefono;
                    echo "</li>";
                    }
                    echo "</ul>";

                    
                }
            } else {
                echo "Error en consulta";
            }

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
        ?>

          


      <?php endif ?>
</body>
</html>
