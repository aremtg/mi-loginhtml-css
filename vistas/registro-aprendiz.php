<?php
        include '../partituras/head.php';
?>
<title>Registrar Aprendiz</title>
        <link rel="stylesheet" href="../css/registro-aprendiz.css">
</head>
<body>
<?php
        include '../partituras/minav.php';
?>
    <form action="../php/registro.php" method="POST" class="caja-registro">
    <h2 class="titulo">Registrar Aprendiz</h2>
    <div class="campo">
            <label for="nombre">Nombre:
                    <input type="text" id="nombre" name="nombre" required>
            </label>
    </div>
    <div class="campo">
            <label for="correo">id:
                    <input type="text" class="input-id" id="id" name="id" required maxlength="10">
            </label>
    </div>
    <div class="campo">
            <label for="edad">Edad:
            <input type="number" class="input-edad" id="edad" name="edad" required max="100" min="1">
            </label>
    </div>

    <div class="campo-sexo">
            <label for="sexo">Sexo:</label>
            <select id="sexo" class="input-sexo" name="sexo" required>
            <option value="">Seleccionar</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
            </select>
    </div>
    <input class="boton-registar" name="boton-registar" value="Registrar" type="submit"></input>
    </form>
        <section class="text_registro">
            <h1>Registro de Aprendices</h1>

            <p>Usted puede registrar y agregar a un aprendiz que no se <br> encuentre en su lista para poder crear su permiso de salida.</p>

            <img src="ruta/de/la/imagen.png" alt="Imagen ilustrativa">
        </section>
</section>
    <section class="contenido">
        <h2>Lista de aprendices</h2>
        <hr>
        <p>hola mi nombre es tatiana y esto es <span class="ssaci-cont">SSACI</span></p>    
    </section>

<?php
        include '../partituras/footer.php';
?>   
</body>
</html> 