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



      <?php if (!isset($_POST["mail"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Personal Info</legend>
            <span>Name:</span><input type="text" name="name" required><br>
            <span>Last Name:</span><input type="text" name="lastname" required><br>
            <span>Email:</span><input type="email" name="mail" required><br>
            <span>Date if Birth:</span><input type="date" name="date"><br>
            <span>Sex: </span><input type="radio" name="sex" value="H">Male<input type="radio" name="sexo" value="M">Female<br>
            <h3>Subjects</h3>
            <input type="checkbox" name="subjects[]" value="LM">MarkUp Languages<br>
            <input type="checkbox" name="subjects[]" value="GBD">Database Management<br>
            <input type="checkbox" name="subjects[]" value="PAR">Computer Networks<br>
            <input type="checkbox" name="subjects[]" value="IAW">Web Apps<br>
            <input type="file">
            <p><input type="submit" value="Send"></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
            echo "<h3>Showing data coming from the form</h3>";
            var_dump($_POST);
        ?>

      <?php endif ?>

  </body>
</html>
