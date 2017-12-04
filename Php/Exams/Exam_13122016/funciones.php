<?php

function primero_diferente($cadena1,$cadena2) {

    if ($cadena1!=$cadena2) {

      for ($i=0;$i<strlen($cadena1);$i++) {
          if ($cadena1[$i]!=$cadena2[$i]) {
            break;
          }
      }

      echo "La primera posición es la $i ".$cadena1[$i].
      "-".$cadena2[$i];
  } else {
    echo "The strings are equal";
  }
}

?>
