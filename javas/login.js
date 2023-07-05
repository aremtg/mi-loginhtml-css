//modo oscuro

botonModo.addEventListener("click", cambiarModo);

function cambiarModo(){
    const botonModo = document.querySelector(".boton-mode");
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
    campoMensajes.style.display = "block";

   campoMensajes.innerHTML=`
   <div id="contenido">
   <a href="#">Reestablecer contraseña</a>
   </div>
   <button id="boton-cerrar-mensaje">X</button>`;

    let botonCerrar = document.getElementById("boton-cerrar-mensaje");
    botonCerrar.addEventListener("click", cerrarMensaje);

    function cerrarMensaje(){
    botonIngresar.disabled = false;
    campoMensajes.style.display = "none";
    }
}
// animacion para pasar de login a registro desde login.php
function animacionBtnQuiero() {
    let caja_cambiarA = document.querySelector(".caja-cambiarA");
    let btn_cambiarA = document.querySelector(".btn-cambiarA");
    let icono_cambiarA = document.querySelector(".fa-person-running");
    // hacer la a aniacion- icono tambien
    
}
  
