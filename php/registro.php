<?php

require_once 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$codigo = $_POST['codigo'];
$confirmarCodigo= $_POST['confirmar_codigo'];
$sexo= $_POST['sexo'];

if($codigo != $confirmarCodigo){
    echo "<h1>las contraseñas no coinciden</h1>";
}else{

    $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$codigo','$correo',$edad,'$sexo');";
    $guardar = mysqli_query($db, $sql);

    if($guardar){
        echo '
        <script>
        alert("El usario se registro correctamente");
        </script>
        ';
        header('location:../vistas/casa.php');
    }else{
        echo "no se pudo registrar el usuario";
    }
}
mysqli_close($db);

?>