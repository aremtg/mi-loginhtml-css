<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db_login = "homerbook";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $db_login);

if(!$db){
    die("no hay conexion tat: ".mysqli_connect_error());
}

?>