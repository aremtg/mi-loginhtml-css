<form action="../php/registro-ssaci.php" method="POST" class="caja-registro">
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
            <input type="number" class="input-edad" id="edad" name="edad" required max="100" min="14">
        </label>
      </div>
      <div class="campo">
        <label for="codigo">Contraseña:</label>
        <input type="password" class="input-codigo" id="codigo" name="codigo" required  maxlength="10">
      </div>
      <div class="campo">
        <label for="confirmar-codigo">Confirmar Contraseña:</label>
        <input type="password" class="input-conf-codigo" id="confirmar-codigo" name="confirmar_codigo" required maxlength="10">
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
      <input class="boton-registar" name="boton-registar" value="Registrarme" type="submit"></input>

    </form>