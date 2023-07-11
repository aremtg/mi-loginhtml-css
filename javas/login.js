//modo oscuro
const botonModo = document.querySelector(".boton-mode");
botonModo.addEventListener("click", cambiarModo);

function cambiarModo(){
    const body = document.querySelector(".body");

    body.classList.toggle("modo-noche");
    if(body.classList.contains("modo-noche")){
        botonModo.innerHTML = "<i class='bi bi-brightness-high-fill'></i>";
        
    }else{
        botonModo.innerHTML = "<i class='bi bi-moon-fill'></i>" ;
    } 
}
//  alerta personalizada
function mensajeOlvideContrasena(){

    let botonIngresar = document.getElementById("boton-ingresar");
    botonIngresar.disabled = true;

    let campoMensajes = document.getElementById("campo-mensajes");
    
    campoMensajes.innerHTML=`
    <div id="mensaje">
    <a href="#">Reestablecer contraseña</a>
    </div>
    <button id="boton-cerrar-mensaje">X</button>`;

    campoMensajes.style.display = "block";
    let botonCerrar = document.getElementById("boton-cerrar-mensaje");
    botonCerrar.addEventListener("click", cerrarMensaje);

    function cerrarMensaje(){
    botonIngresar.disabled = false;
    campoMensajes.style.display = "none";
    }
}
// animacion para pasar de login a registro desde login.php
function transicionRegistroLogin() {
    const cajaLogin = document.querySelector('.caja-login');
    const cajaRegistro = document.querySelector('.caja-registro');
    
   cajaLogin.classList.toggle("ocultar");
   cajaRegistro.classList.toggle("ver");
   
}
  
