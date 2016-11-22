<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing parameters between pages using get.
                 This is the source page
    Date: November 2015
    Reference:http://php.net/manual/reserved.variables.get.php
              http://www.w3schools.com/tags/tag_a.asp
              https://en.wikipedia.org/wiki/Query_string
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info using GET.SOURCE FILE</title>
  </head>
  <body>
      <!-- THE LINK TAG CONTAINS THE GET QUERY -->
      <!-- gest_destination.php is the destination url -->
      <!-- ?username=Pepe&apellidos=Perez Is the Query
           where username and apellidos are the variables
           and Pepe and Perez are the values of the different variables -->
      <a href="get_destination.php?name=Pepe&lastname=Perez&edad=51">CLICK HERE</a>
  </body>
</html>
