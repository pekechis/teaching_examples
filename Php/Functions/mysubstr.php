<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Simple home made substr
    Date: November 2015
    Reference: http://php.net/manual/functions.user-defined.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME MADE SUBSTR</title>
  </head>
  <body>
      <?php

        function subcadena($s,$pi,$pf) {

          $longitud=strlen($s);

          if ($pi<0 || $pf>$longitud-1) {
            return false;
          } else {

            $cadena='';

            for($i=$pi;$i<=$pf;$i++) {
                $cadena=$cadena.$s[$i];
            }

            return $cadena;
          }
        }

        $cadena="SERVIDOR";

        if (subcadena($cadena,1,5)) {
          echo subcadena($cadena,1,5);
        } else {
          echo "Indexes out of bounds";
        };

      ?>
  </body>
</html>
