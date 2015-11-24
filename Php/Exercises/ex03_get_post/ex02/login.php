<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Login page using jQuery UI Dialog Form
                 If username="Pepe" and password="12345" goes to matricula.php
                 if not show an error in the login form
    Date: April
    Reference:
-->
<?php
  //As username is required if isset I'm coming from a login post request
  if (isset($_POST["username"])) {
     $username = $_POST["username"];
     $password = $_POST["password"];

     if  ($username=="Pepe" && $password=="12345") {
       //If login is correct redirecting to matricula.php
       header("Location: matricula.php");
     } else {
       //If login incorrect let's create an error message
       $error_msg="Incorrect Login. Try again";
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Using Post and jQuery UI Dialog</title>
    <!-- Styles and Scripts for using jquery and jquery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  </head>
  <body>
     <!-- DIV CONTAINING THE FORM -->
     <div id="dialog-form" title="Login Form">
       <form action="login.php" method="post">
          <?php
            //If isset the error message we're in a post request with
            //wrong login data
            if (isset($error_msg)) {
              echo "<p id='error_msg'>$error_msg</p>";
            }
          ?>
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="text ui-widget-content ui-corner-all" required>
          <label for="password">Password:</label>
          <input type="text" name="password" id="password" class="text ui-widget-content ui-corner-all" required>
          <div>
            <p><input type="submit" value="Login"></p>
          </div>
        </form>
      </div>
      <!-- CONVERTING THE FORM TO DIALOG USING jQUERY UI -->
      <script>
       $(function() {
         dialog = $( "#dialog-form" ).dialog();
       });
      </script>
  </body>
</html>
