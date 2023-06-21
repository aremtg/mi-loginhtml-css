<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrate</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
<div class="caja-registro">
    <h2 class="titulo">Registrate en Homerbook</h2>

    <form action="php/registro.php" method="POST">
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
        <input class="btn-enviar-registro" type="submit" value="Enviar">
      </div>
    </form>
  </div>
</body>
</html>