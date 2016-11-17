<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST and HTML forms
                 using the same file
    Date: November 2015
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
	if (!isset($_POST["city"])) : ?>
		<form method="post">
		  <fieldset>
		    <legend>CLIENT SEARCH</legend>
		    <span>City:</span><input type="search" name="city" required><br>
		    <span><input type="submit" value="Search"><br>
		  </fieldset>
		</form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php

            //CREATING THE CONNECTION
      	    $connection = new mysqli("localhost", "root", "123456789", "tf");

           //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
           printf("Connection failed: %s\n", $connection->connect_error);
           exit();
          }

      	 //MAKING A SELECT QUERY
	 $query="SELECT * FROM CLIENTES WHERE direccion LIKE '%,%".$_POST['city']."'";

         /* Consultas de selección que devuelven un conjunto de resultados */
         if ($result = $connection->query($query)) {

            if ($result->num_rows==0) {
		echo "No clients found";
	    } else {

	      printf("<p>The select query returned %d rows.</p>", $result->num_rows);
	    }
        ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>CodCliente</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Direccion</th>
              <th>Teléfono</th>
          </thead>

       <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->CodCliente."</td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Apellidos."</td>";
              echo "<td>".$obj->DNI."</td>";
              echo "<td>".$obj->Direccion."</td>";
              echo "<td>".$obj->Telefono."</td>";
              echo "</tr>";
          }

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } else { //END OF THE IF CHECKING IF THE QUERY WAS RIGHT	

	echo "Wrong Query";
      }
		
        ?>

      <?php endif ?>

  </body>
</html>
