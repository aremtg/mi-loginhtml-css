<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/papelito.css">
</head>
<body>
    <section class="contenedor">
        <div class="izquierda">
            <div class="hoja">
                <p class="fecha"></p>
                <div class="logos">
                     <img src="../imagenes/logoSena.svg" width="80px" alt="">
                     <span class="separa-logos"></span>
                     <img src="../logopapel.png" width="90px" alt="">
                </div>

                    <h1 class="titulo">PEPELITO DE SALIDA</h1>
                    <img src="" alt="">
                        <table>
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
                                            <option value="1">tatiana andrea guzman</option>
                                            <option value="2">name namedos apelllido</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>123456</option>
                                            <option value="1">2557736</option>
                                            <option value="2">1111111</option>
                                            <option value="3">2222222</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>Analisis y desarrollo de software</option>
                                            <option value="1">abcdefg hijk</option>
                                            <option value="2">abcdefg hijk</option>
                                            <option value="3">abcdefg hijk</option>
                                        </select>
                                    </td>
                                  </tr>
                                </tbody>
                        </table>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-motivo">Motivo de la salida</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                <div class="firmas">
                        
                </div>
            </div>
            <button class="btn-generar-imagen" onclick="generarImagen()">Generar Papelito</button>
        </div>
        
        <div class="derecha">
            <div class="resultado">
                <!-- <img src="imagenes/portero.jpg" alt=""> -->
            </div>
            <button class="btn-generar-imagen" onclick="enviarAPorteria()">Enviar a porteria</button>
        
        </div>
              
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>
    <script src="../javas/papelito.js"></script>
</body>
</html>