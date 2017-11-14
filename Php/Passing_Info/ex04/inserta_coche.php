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



      <?php if (!isset($_POST["matricula"])) : ?>
        <form method="post">
            <span>Matricula:</span><input type="text" name="matricula" required><br>
            <span>km:</span><input type="number" name="km" required><br>
            <span>Fecha de Matriculación:</span><input type="date" name="fecha" required><br>
            <span>Marca:</span><input type="text" name="marca"><br>
            <span>Modelo:</span><input type="text" name="modelo"><br>
            <p><input type="submit" value="Insert"></p>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
            echo "<a href='ficha_coche.php?".
                 "matricula=".$_POST["matricula"].
                 "&km=".$_POST['km'].
                 "&fecha=".$_POST['fecha'].
                 "&marca=".$_POST['marca'].
                 "&modelo=".$_POST['modelo'].
                 "'>COCHE INSERTADO</a>";
        ?>

      <?php endif ?>

  </body>
</html>
