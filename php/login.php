<?php
require_once 'conexion.php';

$usuario_ingresado = $_POST["usuario"];
$contrasena_ingresada = $_POST["contrasena"];

#se hace la consulta para ver si existe ese usuario ingresado en la bd
$query = mysqli_query($db, "SELECT * FROM usuarios WHERE correo = '".$usuario_ingresado."' and codigo = '".$contrasena_ingresada."'");
#en la variable columnasAfectadas se guarda inf de lo que afecto la consulta hecha en $query.
$columnasAfectadas = mysqli_num_rows($query);

#si la consulta encontro algo 
if($columnasAfectadas == 1){
    header("location: ../vistas/casa.php");
}else if($columnasAfectadas == 0){
    header("location: ../vistas/login.php");
    // echo "error tatiana";
}



?>