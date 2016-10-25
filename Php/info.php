<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: First PHP Script. Shows info about de environment
    Date: October 2015
    Reference: http://www.php.net/ & http://php.net/manual/en/function.phpinfo.php
    Requires: HTML Knowledge
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIRONMENT INFO</title>
  </head>
  <body>
    <!-- PHP BLOCK EMBEDDED IN HTML. THE OUPUT OF THE  -->
    <!-- SCRIPT WILL BE SHOWN IN THE HTTP RESPONSE TO  -->
    <!-- THE CLIENT -->
    <?php
      phpinfo();
    ?>

  </body>
</html>
