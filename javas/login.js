//  alerta personalizada
let botonIngresar = document.getElementById("boton-ingresar");
let campoMensajes = document.getElementById("campo-mensajes");

function mensajeOlvideContrasena() {
  botonIngresar.disabled = true;
  campoMensajes.innerHTML = `
    <div id="mensaje">
      <a href="#">Reestablecer contraseña</a>
    </div>
    <button id="cerrarMensaje">&times;</button>
  `;

  campoMensajes.style.display = "block";

  if (botonIngresar.disabled === true) {
    let botonCerrar = document.getElementById("cerrarMensaje");

    document.addEventListener('click', function cerrarmensaje(event) {
      if (event.target !== campoMensajes && event.target !== botonCerrar) {
        // Código a ejecutar cuando el clic no se hace en los elementos especificados
        botonIngresar.disabled = false;
        campoMensajes.style.display = "none";
      }
    });
  }
}


//para pasar de login a registro desde login.php
function transicionRegistroLogin() {
    const cajaLogin = document.querySelector('.caja-login');
    const cajaRegistro = document.querySelector('.caja-registro');
    
    var textoBtn = document.querySelector(".btn-transicion");
    textoBtn.textContent = textoBtn.textContent === "Ya tengo cuenta" ? "Registrarme" : "Ya tengo cuenta";
  
    cajaLogin.classList.toggle("ocultar");
    cajaRegistro.classList.toggle("ver");
   
}
  
