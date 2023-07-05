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
    
    <form action="../php/login.php" method="post" class="caja-login">
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
    <div class="caja-cambiarA">
        <button class="btn-cambiarA activo" type="submit" onclick="animacionBtnQuiero()">Quiero registrarme         <i class="fa-solid fa-person-running"></i></button>
    </div>
   <div id="campo-mensajes">
       
    </div>

    <form action="../php/registro.php" method="POST" class="caja-registro">
      <h2 class="titulo">Registrate en <span class="ssaci">SSACI</span></h2>
      <div class="campo">
        <label for="nombre">Nombre:
                <input type="text" id="nombre" name="nombre" required>
        </label>
      </div>
      <div class="campo">
        <label for="correo">Correo:
                <input type="email" class="input-correo" id="correo" name="correo" required>
        </label>
      </div>
      <div class="campo">
        <label for="edad">Edad:
            <input type="number" class="input-edad" id="edad" name="edad" required max="100" min="1">
        </label>
      </div>
      <div class="campo">
        <label for="contrasena">Contraseña:</label>
        <input type="password" class="input-codigo" id="codigo" name="codigo" required>
      </div>
      <div class="campo">
        <label for="confirmar-codigo">Confirmar Contraseña:</label>
        <input type="password" class="input-conf-codigo" id="confirmar-codigo" name="confirmar_codigo" required>
      </div>
      
      <div class="campo">
        <label for="sexo">Sexo:</label>
        <select id="sexo" class="input-sexo" name="sexo" required>
          <option value="">Seleccionar</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select>
      </div>
      <div class="campo">
        <input class="btn-enviar-registro" name="btn_registar" type="submit" value="Enviar">
      </div>
    </form>
    <script src="https://kit.fontawesome.com/1eaa4d8a9c.js" crossorigin="anonymous"></script>
    <script src="../javas/login.js"></script>
</body>
</html>