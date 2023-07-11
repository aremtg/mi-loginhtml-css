<?php
        include '../partituras/head.php';
?>
    <title>Creando permiso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="../css/papelito.css">
</head>
<body>
<?php
        include '../partituras/minav.php';
?>
<div class="hoja">
    <div class="box-fecha">
        <div class="fecha"></div>
    </div>
   <div>
        <label for="aprendiz-lista">Aprendiz:</label>
        <select id="aprendiz-lista">
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
            <option value="opcion3">Opción 3</option>
        </select>
    </div>
    <div>
        <label for="titulada">Titulada:</label>
        <input type="text" id="titulada" value="Analisis y Desarrollo de software" />
    </div>
    <div>
        <label for="ficha">Ficha:</label>
        <input type="text" id="ficha" value="2557736" />
    </div>
    <div>
        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" value="Hector Mauricio Camargo" />
    </div>
    
    <div>
        <div class="hora">ffff</div>
        <button>a.m</button>
    </div>
  
  <div class="box-motivo">
    <label for="motivo">Movitivo de la salida:</label>
    <textarea id="motivo" rows="4" cols="50"></textarea>
  </div>
</div>

    <button class="btn-generar-imagen" onclick="generarImagen()">Generar</button>

    <div class="resultado">

    </div>
    <button class="btn-generar-imagen" onclick="enviarAPorteria()">Enviar</button>

</section>
    <script src="https://kit.fontawesome.com/1eaa4d8a9c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>
    <script src="../javas/papelito.js"></script>
</body>
</html>