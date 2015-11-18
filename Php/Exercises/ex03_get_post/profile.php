<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: 
    Date: April
    Reference:
    Requires:
-->
<?php
  //Let's Check if I have an id var in the URL Query
  if (!isset($_GET['id'])) {
    //Redirect if $_GET['id'] does not exist in the URL Query
    header("Location: students.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show the profile of the id passed using http GET</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
  </head>
  <body>
      <?php
          $data = array(
            array("id"=>,
                  ""
            ),
          );

          //Getting the id
          $student=$data[$_GET['if']];
      ?>

  </body>
</html>
