
<?php

function conectar($host ="192.168.1.30",
                  $user = "root",
                  $password = "Admin2015",
                  $bd = "tf",
                  $port = 3316) {


  //CREATING THE CONNECTION
  $connection = new mysqli($host, $user, $password, $bd,$port);
  $connection->set_charset("uft8");

  //TESTING IF THE CONNECTION WAS RIGHT
  if ($connection->connect_errno) {
      echo "Error al conectar";
      return false;
  }

  return $connection;

}

?>
