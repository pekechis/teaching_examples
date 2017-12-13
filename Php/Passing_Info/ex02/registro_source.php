<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST between two pages using HTML forms
                  This is the source file
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
    <title>Passing info using POST and HTML FORMS.SOURCE FILE</title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
      <!-- FORM -->
      <!-- As a rule we always use method="post" -->
      <!-- action="post_destinationt" indicates the url where we are sending form data -->
      <form action="registro_destination.php" method="post">
        <fieldset>
          <span>Name:</span><input type="text" name="name" required><br>
          <span>Last Name:</span><input type="text" name="lastname" required><br>
          <span>Email:</span><input type="email" name="mail" required><br>
          <span>Password:</span><input type="password" name="password" required><br>
          <span>Image de Perfil:</span><input type="file" name="profile"><br>
          <p><input type="submit" value="Send"></p>
        </fieldset>
      </form>
  </body>
</html>
