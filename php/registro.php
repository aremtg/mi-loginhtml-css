<?php

require_once 'conexion.php';
if(!empty($_POST['btn_registar'])){
    if (empty($_POST['nombre']) or empty($_POST['correo']) or empty($_POST['edad']) or empty($_POST['codigo']) or empty($_POST['confirmar_codigo']) or empty($_POST['sexo'])){
        echo 'vacios';
    } else {
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
               
                header('location:../vistas/casa.php');
                echo '
                <script>
                alert("El usario se registro correctamente");
                </script>
                ';
            }else{
                echo "no se pudo registrar el usuario";
            }
        }
    }
    mysqli_close($db);
}



?>