<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSACI</title>
    <!-- hoja de estilo -->
    <link rel="stylesheet" href="../css/basic.css">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/loginn.css">
</head>
<body class="body">
    <div class="boton-mode" ><i class='bi bi-moon-fill'></i>
    </div>
<div class="contenedor-login-registro">


    <form action="../php/login.php" method="post" class="caja-login animate__rubberBand">
        <h1 class="titulo">SSACI</h1>

            <label for="usuario">
                <i class="fa-solid fa-user"></i>
                <input required placeholder="correo@gmail.com" type="text" name="correo" id="usuario">
            </label>
            <label for="contrasena">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="contraseña" name="codigo" type="password" id="contrasena">
            </label>
                <a href="#" onclick="mensajeOlvideContrasena()" class="olvide">¿Olvidaste tu contraseña?</a>
                <input id="boton-ingresar" value="Ingresar" type="submit"></input>
    </form>
    <?php
        include '../partituras/registro-partitura.php';
      ?>
</div>
    <div class="div-transicionRegistroLogin">
    <button class="btn-transicion" onclick="transicionRegistroLogin()">
         .
    </button>
    </div>
   <div id="campo-mensajes">
       
    </div>
    
    <script src="https://kit.fontawesome.com/1eaa4d8a9c.js" crossorigin="anonymous"></script>
    <script src="../javas/login.js"></script>
</body>
</html>