<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "homerbook";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(!$conn){
    die("no hay conexion tatis: ".mysqli_connect_error());
}
$usuario_ingresado = $_POST["usuario"];
$contrasena_ingresada = $_POST["contrasena"];


$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombreusuario = '".$usuario_ingresado."' and codigo = '".$contrasena_ingresada."'");
$existeElUsuario = mysqli_num_rows($query);

if($existeElUsuario == 1){
    header("location: vistas/papelito.php");
}else if($existeElUsuario == 0){
    header("location: login.html");
    // echo "error tatiana";
}
?>