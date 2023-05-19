<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db_login = "login";
$db_registro = "registro"

$conn1 = mysqli_connect($dbhost, $dbuser, $dbpass, $db_login);

if(!$conn1){
    die("no hay conexion tatis: ".mysqli_connect_error());
}
$usuario_ingresado = $_POST["usuario"];
$contrasena_ingresada = $_POST["contrasena"];


$query = mysqli_query($conn1, "SELECT * FROM usuarios WHERE nombre = '".$usuario_ingresado."' and codigo = '".$contrasena_ingresada."'");
$filaDeArriba = mysqli_num_rows($query);

if($filaDeArriba == 1){
    echo "muy bien, hola ".$usuario_ingresado;
}else if($filaDeArriba == 0){
    header("location: login.html");
    // echo "error tatiana";
}



?>