<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: LOGIN VULNERABLE TO SQL INJECTION
    Date: January 2016     
-->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>

    <?php
        //FORM SUBMITTED
        if (isset($_POST["user"])) {

          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "tf", "12345", "tf");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from usuarios where
          username='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";

          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {

              //No rows returned
              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";

                header("Location: index.php");
              }

          } else {
            echo "Wrong Query";
            var_dump($consulta);
          }
      }
    ?>

    <form action="login_vulnerable.php" method="post">

      <p><input name="user" required></p>
      <p><input name="password" type="password" required></p>
      <p><input type="submit" value="Log In"></p>

    </form>



  </body>
</html>
