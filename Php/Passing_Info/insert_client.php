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
		if (!isset($_POST["cod"])) : ?>
        <form method="post">
          <fieldset>
            <legend>CLIENTE</legend>
            <span>Client Code:</span><input type="text" name="cod" required><br>
            <span>ID:</span><input type="text" name="id" required><br>
            <span>LastName:</span><input type="text" name="lastname" required><br>
            <span>Name:</span><input type="text" name="name" required><br>
            <span>Address:</span><input type="text" name="address" required><br>
            <span>Phone:</span><input type="text" name="phone" required><br>
	    <span><input type="submit" value="Enviar"><br>
	  </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
            echo "<h3>Showing data coming from the form</h3>";
            var_dump($_POST);

            //CREATING THE CONNECTION
      	    $connection = new mysqli("localhost", "root", "123456789", "tf");

           //TESTING IF THE CONNECTION WAS RIGHT
           if ($connection->connect_errno) {
           	printf("Connection failed: %s\n", $connection->connect_error);
	        exit();
	   }

	   $codigo=$_POST['cod'];
	   $consulta= "INSERT INTO CLIENTES VALUES('$codigo','".$_POST['id']."','".$_POST['lastname']."','".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."')";
	
	   var_dump($consulta);

	   $result = $connection->query($consulta);

	   if (!$result) {
 		echo "Query Error";
           } else {
		echo "New client added";
	   }
		
        ?>

      <?php endif ?>

  </body>
</html>
