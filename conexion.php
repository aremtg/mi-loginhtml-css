<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db_login = "homerbook";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_login);

if(!$conn){
    die("no hay conexion tat: ".mysqli_connect_error());
}
$usuario_ingresado = $_POST["usuario"];
$contrasena_ingresada = $_POST["contrasena"];


$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '".$usuario_ingresado."' and codigo = '".$contrasena_ingresada."'");
$filaDeArriba = mysqli_num_rows($query);

if($filaDeArriba == 1){
    echo "muy bien, hola ".$usuario_ingresado;
}else if($filaDeArriba == 0){
    header("location: login.html");
    // echo "error tatiana";
}



?>