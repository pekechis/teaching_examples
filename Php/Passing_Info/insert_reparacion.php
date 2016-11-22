<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST and HTML forms
                 using the same file with database interaction
    Date: November 2016
    Reference: http://www.w3schools.com/tags/tag_form.asp
               http://www.w3schools.com/tags/tag_input.asp
               http://php.net/manual/reserved.variables.post.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php
		if (!isset($_POST["fe"])) : ?>
        <form method="post">
          <fieldset>
            <legend>REPARACION</legend>
            <span>Matricula:</span><select name="matricula" required>
            <?php
              //CREATING THE CONNECTION
              $connection = new mysqli("localhost", "tf", "12345", "tf");

              //TESTING IF THE CONNECTION WAS RIGHT
              if ($connection->connect_errno) {
              	 printf("Connection failed: %s\n", $connection->connect_error);
   	           exit();
   	         }

             $result = $connection->query("SELECT matricula FROM vehiculos");

             if ($result) {
               //Query successful
               while ($obj=$result->fetch_object()) {
                  echo "<option>";
                  echo $obj->matricula;
                  echo "</option>";
               }

             } else {
               //Query failed
               printf("Query failed: %s\n", $connection->connect_error);
               exit();
             }

            ?>
            </select>
            <br>
            <span>Fecha Entrada:</span><input type="date" name="fe" required><br>
            <span>Fecha Salida:</span><input type="date" name="fs" ><br>
            <span>Km:</span><input type="number" name="km" required><br>
            <span>Averia:</span><input type="text" name="averia" ><br>
            <span>Reparado:</span><input type="radio" name="reparado" value="1">Sí
            <input type="radio" name="reparado" value="0">No<br>
            <span>Observaciones</span><textarea name="observaciones"></textarea><br>
	           <span><input type="submit" value="Enviar"><br>
	         </fieldset>
        </form>

      <?php else: ?>

      <?php
            echo "<h3>Showing data coming from the form</h3>";
            var_dump($_POST);

            //CREATING THE CONNECTION
      	    $connection = new mysqli("localhost", "tf", "12345", "tf");

           //TESTING IF THE CONNECTION WAS RIGHT
           if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }


            if ($_POST['fs']=='')  {
              $fs="9999-12-31";
            } else {
              $fs=$_POST['fs'];
            }
            $consulta= "INSERT INTO reparaciones VALUES
            (null,'".$_POST['matricula']."','".$_POST['fe']."',".
            $_POST['km'].",'".$_POST['averia']."','".$fs."'
            ,".$_POST['reparado'].",'".$_POST['observaciones']."')";

  	        var_dump($consulta);

  	        $result = $connection->query($consulta);

  	        if (!$result) {
   		         echo "Query Error";
            } else {
              echo "New Reparacion Added";
            }

     ?>

      <?php endif ?>
  </body>
</html>
