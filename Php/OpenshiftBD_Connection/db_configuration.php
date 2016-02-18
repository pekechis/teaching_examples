<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Example DBD configuration for OpenShift
    Date: February 2016
    Reference:
-->
<?php

  var $user;
  var $host;
  var $password;
  var $db_name;

  //Checking if we are into the OpenShift App
  if (isset($_ENV['OPENSHIFT_APP_NAME'])) {
    $user=$_ENV['OPENSHIFT_MYSQL_DB_USERNAME']; //Openshift db name OPENSHIFT_MYSQL_DB_USERNAME
    $host=$_ENV['OPENSHIFT_MYSQL_DB_HOST']; //Openshift db host OPENSHIFT_MYSQL_DB_HOST
    $password=$_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']; //Openshift db password OPENSHIFT_MYSQL_DB_PASSWORD
    $db_name="tf"; //Openshift db name
  } else {
    $user="tf"; //my db user
    $host="localhost"; //my db host
    $password="12345"; //my db password
    $db_name="tf"; //my db name
  }

?>
