<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: LOGIN WITH PREPARED STATEMENTS. NOT VULNERABLE TO SQL
                 INJECTION
    Date: January 2016
    Reference: http://php.net/manual/en/mysqli.quickstart.prepared-statements.php
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
          $connection = new mysqli("127.0.0.1","tf", "123456", "tf");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options

          //SHOWING THE UNSAFE VERSION -- SQL INJECTION POSSIBLE
          //$consulta="select * from usuarios where
          //username='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";
          $query = $connection->prepare("SELECT * FROM usuario
            WHERE username=? AND password=md5(?)");

          //Binding the ? to the post values
          $query->bind_param("ss",$_POST["user"],$_POST["password"]);


          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($query->execute()) {

              //No rows returned
              if ($query->affected_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";

                //Redirecting to the Start Page
                header("Location: index.php");
              }

          } else {
            echo "Wrong Query";

            var_dump($consulta);
          }
      }
    ?>

    <form action="login.php" method="post">

      <p><input name="user" required></p>
      <p><input name="password" type="password" required></p>
      <p><input type="submit" value="Log In"></p>

    </form>



  </body>
</html>
