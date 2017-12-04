<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: jperjim398@iestriana.es
    Description: EX01
    Date: December 20th 2016
-->
<?php

  //Definición del array
  $v=["HOLA","ADIOS","HASTA LUEGO"];

  //Recorremos el Array
  for ($i=0;$i<sizeof($v);$i++) {
    //Sacamos la Longitud del elemento. Para cadenas usamos strlen
    echo strlen($v[$i])."->'";

    //Las cadenas puede ser tratadas como un array así que recorremos
    //el elemento que estamos tratando al revés
    for($j=strlen($v[$i])-1;$j>=0;$j--) {
       echo $v[$i][$j];
    }

    //Cerramos las comillas y ponemos una nuevo línea
    echo "'<br>";
  }

?>
