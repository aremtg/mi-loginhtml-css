
//------------------------------------------
//guardando-usuario 
// localStorage.setItem("usuarioInvitado", "admin");
// localStorage.setItem("contrasenaInvitado", "admin");

// const botonIngresar = document.querySelector("#boton-ingresar");
// // trayendo valor de usuarios del localstorage
// const usuGuardado = localStorage.getItem("usuarioInvitado");
// const conGuardado = localStorage.getItem("contrasenaInvitado");
let focusUsuario = document.querySelector("#usuario");
focusUsuario.focus();

// botonIngresar.addEventListener("click", ir);

// function ir(){
//     const usuIngresado = document.querySelector("#usuario").value;
//     const conIngresado = document.querySelector("#contrasena").value;
//     if(usuIngresado === usuGuardado && conIngresado === conGuardado ){
//         location.href = "/index.html";
//     }else if(usuIngresado === "" || conIngresado === ""){
//         alert("ingrese un nombre de usuario y una contraseña");
//     }
//     else{
//         let campoMensajes = document.querySelector("#campo-para-mensajes");

//             campoMensajes.innerHTML=
//             `<div id="contenedor-mensaje">
//                  <h3 id="titulo-mensaje">Usuario Incorrecto</h3> <!-- titulo -->
//                  <span id="contenido-mensaje">Por favor ingrese un usuario y contraseña valido... verifique si ya esta registrado</span> <!-- contenido -->
//                  <button id="boton-cerrar-mensaje" type="button">Cerrar</button> <!-- boton -->
//              </div>`;
//              const h3Titulo = document.querySelector("#titulo-mensaje");
//              h3Titulo.style=`color: red; text-align: center;`
//              const botonCerrar = document.querySelector("#boton-cerrar-mensaje");
//              botonCerrar.addEventListener("click", cerrarMensaje)
         
//              function cerrarMensaje(){
//              campoMensajes.innerHTML= "";
//              }
//     }
// }

//evento para mostar un mensaje-de recordar contraseña 

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

//modo oscuro
const botonModo = document.querySelector(".boton-mode");
const body = document.querySelector(".body");

botonModo.addEventListener("click", cambiarModo);

function cambiarModo(){
    body.classList.toggle("modo-noche");
    if(body.classList.contains("modo-noche")){
        botonModo.innerHTML = "<i class='bi bi-brightness-high-fill'></i>";
        
    }else{
        botonModo.innerHTML = "<i class='bi bi-moon-fill'></i>" ;
    } 
}

