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
    <p class="fecha"></p>
    <div class="logos">
        <img src="../imagenes/logoSena.svg" width="80px" alt="">
        <span class="separa-logos"></span>
        <img src="../logopapel.png" width="90px" alt="">
    </div>

    <h1 class="titulo">Permiso</h1>
    <img src="" alt="">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre Aprendiz</th>
                <th scope="col">Ficha</th>
                <th scope="col">Titulada</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Aprendiz Sena</option>
                        <option value="1">Aprendiz 1</option>
                        <option value="2">Aprendiz 2</option>
                        <option value="3">Aprendiz 3</option>
                    </select>
                </td>
                <td>
                   2557736
                </td>
                <td>
                   Analisis y Desarrollo de Software
                </td>
            </tr>
        </tbody>
        
    </table>
    <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-motivo">Motivo de la salida</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
</div>

        <button class="btn-generar-imagen" onclick="generarImagen()">Generar</button>
    </div>
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