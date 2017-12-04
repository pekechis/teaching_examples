<?php

  //Definición de la función
  function dividir($cadena,$caracter) {

    $v=[];
    $parte1="";
    $parte2="";

    //Lo recorremos mientras no encontremos el caracter
    //Trataremos la cadena como un vector
    for ($i=0; $i<strlen($cadena) && $cadena[$i]!=$caracter;$i++) {
      $parte1=$parte1.$cadena[$i];
    }

    //Si hemos llegado al final es que no estaba. Devolvemos false
    if ($parte1==$cadena) {
      return false;
    } else {

        //Hemos encontrado el carácter. Lo añadimos
        //al vector a devolver
        $v[]=$parte1;

        //Recorremos el resto. Empezamos donde lo hemos encontrado
        for($j=$i;$j<strlen($cadena);$j++) {
         $parte2=$parte2.$cadena[$j];
        }

        //Añadimos el caracters
        $v[]=$parte2;
    }

    return $v;
  }




?>
