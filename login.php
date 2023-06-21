<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar a Arem</title>
    <!-- logo de la pestaña -->
    <link rel="shortcut icon" href="pestaña.png" type="image/x-icon">
    <!-- hoja de estilo -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="body">
    <div class="boton-mode" ><i class='bi bi-moon-fill'></i></div>
    <a href="#"><img class="homero" src="homero-ingresar.png" alt=""></a>

    <form class="formulario" action="conexion.php" method="post">
        <h1 class="titulo">HomerBook</h1>
        <div class="inputs">
            <label for="usuario">
                <i class="fa-solid fa-user"></i>
                <input required placeholder="nombre de usuario" type="text" name="usuario" id="usuario">
            </label>
            <label for="contrasena">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="contraseña" name="contrasena" type="password" id="contrasena">
            </label>
                <a href="#" class="olvide">¿Olvidaste tu contraseña?</a>
                <input id="boton-ingresar" value="Ingresar" type="submit"></input>
        </div>
</form>
    
    <div id="campo-para-mensajes">

    </div>


    <script src="https://kit.fontawesome.com/1eaa4d8a9c.js" crossorigin="anonymous"></script>
    <script src="javas/login.js"></script>
</body>
</html>