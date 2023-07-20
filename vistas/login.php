<?php
        include '../partituras/head.php';
?>
    <title>SSACI</title>
    <!-- hoja de estilo -->
    <link rel="stylesheet" href="../css/registro-ssaci.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="contenedor-login-registro">

    <form action="../php/login.php" method="post" class="caja-login animate__rubberBand">
        <h1 class="titulo">SSACI</h1>

            <label for="usuario">
                <img src="../imagenes/usuario-icon.svg" alt="">
                <input required placeholder="correo@gmail.com" name="correo" type="text" id="usuario">
            </label>
            <label for="contrasena">
                <img src="../imagenes/candado-icon.svg" alt="">
                <input required placeholder="contraseña" name="codigo" type="password" id="contrasena" maxlength="10">
            </label>
                <a href="#" onclick="mensajeOlvideContrasena()" class="olvide">¿Olvidaste tu contraseña?</a>
                <input id="boton-ingresar" value="Ingresar" type="submit"></input>
    </form>
    <?php
        include '../partituras/registro-ssaci.php';
      ?>
</div>
    <div class="div-transicionRegistroLogin">
    <button class="btn-transicion" onclick="transicionRegistroLogin()">
    Registrarme
    </button>
    </div>
   <div id="campo-mensajes">
       
    </div>

<?php
        include '../partituras/footer.php';
?>   
</body>
</html>