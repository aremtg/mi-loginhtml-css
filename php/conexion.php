<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db_login = "papel";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $db_login);

if(!$db){
    die("no hay conexion tatiana: ".mysqli_connect_error());
}

?>