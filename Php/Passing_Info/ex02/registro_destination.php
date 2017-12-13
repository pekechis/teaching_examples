<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST between two pages using HTML forms
                  This is the destination file
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
    <title>Passing info using POST and HTML FORMS.DESTINATION FILE</title>
  </head>
  <body>
      <?php
        echo "<h3>Showing data coming from the form in post_destination.php</h3>";
        var_dump($_POST);
      ?>
  </body>
</html>
