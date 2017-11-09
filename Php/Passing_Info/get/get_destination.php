<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing parameters between pages using get
                 This is the destinatio file
    Date: November 2015
    Reference: http://php.net/manual/reserved.variables.get.php
               http://www.w3schools.com/tags/tag_a.asp
               https://en.wikipedia.org/wiki/Query_string
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSING INFO USING GET. DESTINATION FILE</title>
  </head>
  <body>
      <?php
        var_dump($_GET);
        var_dump($_POST);
        // $_GET is always set. We check if it contains anything
        // If $_GET is empty (does not contains anything)
       if (empty($_GET)) {
         //Showing a message telling the user that $_GET is empty
         //probably because the user doesn't came from get_source.php
         echo "NOTHING HAS BEEN SENT";
       } else {
         //If $_GET contains anything (probably coming from get_source.php)
         //I dump the variable into the screen showing the content
         echo "Name:".$_GET['name']."<br>";
         echo "LastName:".$_GET['lastname']."<br";

       }
      ?>
  </body>
</html>
