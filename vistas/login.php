<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSACI</title>
    <!-- hoja de estilo -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="body">
    <div class="boton-mode" ><i class='bi bi-moon-fill'></i></div>
    
    <form action="../php/login.php" method="post">
        <h1 class="titulo">SSACI</h1>

            <label for="usuario">
                <i class="fa-solid fa-user"></i>
                <input required placeholder="correo" type="text" name="usuario" id="usuario">
            </label>
            <label for="contrasena">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="contraseña" name="contrasena" type="password" id="contrasena">
            </label>
                <a href="#" onclick="mensajeOlvideContrasena()" class="olvide">¿Olvidaste tu contraseña?</a>
                <input id="boton-ingresar" value="Ingresar" type="submit"></input>
    </form>
    
    <div id="campo-mensajes">
       
    </div>
    <script src="https://kit.fontawesome.com/1eaa4d8a9c.js" crossorigin="anonymous"></script>
    <script src="../javas/login.js"></script>
</body>
</html>