<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Example DBD configuration for OpenShift
    Date: February 2016
    Reference:
-->
<?php


  //Checking if we are into the OpenShift App
  if (isset($_ENV['MYSQL_USER'])) {
    $db_user=$_ENV['MYSQL_USER']; //Openshift db name OPENSHIFT_MYSQL_DB_USERNAME
    $db_host=$_ENV['MYSQL_HOST']; //Openshift db host OPENSHIFT_MYSQL_DB_HOST
    $db_password=$_ENV['MYSQL_PASSWORD']; //Openshift db password OPENSHIFT_MYSQL_DB_PASSWORD
    $db_name=$_ENV["MYSQL_DB"]; //Openshift db name
  } else {
    $db_user="tf"; //my db user
    $db_host="localhost"; //my db host
    $db_password="12345"; //my db password
    $db_name="tf"; //my db name
  }

?>
