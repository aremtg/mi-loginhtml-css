
//------------------------------------------
//guardando-usuario 
// localStorage.setItem("usuarioInvitado", "admin");
// localStorage.setItem("contrasenaInvitado", "admin");

// const botonIngresar = document.querySelector("#boton-ingresar");
// // trayendo valor de usuarios del localstorage
// const usuGuardado = localStorage.getItem("usuarioInvitado");
// const conGuardado = localStorage.getItem("contrasenaInvitado");
// let focusUsuario = document.querySelector("#usuario");
focusUsuario.focus();

// botonIngresar.addEventListener("click", ir);

// function ir(){
//     const usuIngresado = document.querySelector("#usuario").value;
//     const conIngresado = document.querySelector("#contrasena").value;
//     if(usuIngresado === usuGuardado && conIngresado === conGuardado ){
//         //alert(usuIngresado + " es igual a " + usuGuardado , conIngresado + " es igual a " + conGuardado);
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
let linkOlvide = document.querySelector("#link-olvide");
let campoMensajes = document.querySelector("#campo-para-mensajes");
linkOlvide.addEventListener("click", crearMensajeOlvideContrasena);

function crearMensajeOlvideContrasena(){
   campoMensajes.innerHTML=
   `<div id="contenedor-mensaje">
        <h3 id="titulo-mensaje">¿olvidaste tu contraseña?</h3> <!-- titulo -->
        <span id="contenido-mensaje">Soy Arem, aun no he creado un registro... entra con usuario y sontraseña "admin"</span> <!-- contenido -->
        <div id="dos-botones">
        <button id="boton-restablecer-contrasena" type="button">Aun no sirve</button> <!-- boton -->
        <button id="boton-cerrar-mensaje" type="button">Cerrar</button> <!-- boton -->
        </div>
    </div>`;
    const h3Titulo = document.querySelector("#titulo-mensaje");
    h3Titulo.style=`text-align: center;`
    const botonCerrar = document.querySelector("#boton-cerrar-mensaje");
    botonCerrar.addEventListener("click", cerrarMensaje);

    function cerrarMensaje(){
    campoMensajes.innerHTML= "";
    }
    const dosBotones = document.querySelector("#dos-botones");
    dosBotones.style=`
    width: 100%;
    display:flex;
    gap: 5rem;
    justify-content: center;
    margin-top: 10px;
    `;
    const botonRestablecerContrasena = document.querySelector("#boton-restablecer-contrasena");
        botonRestablecerContrasena.style=`
        width: max-content;
        background: aqua;
        border: 0.9px rgb(34, 235, 235) solid;
        border-radius: .25rem;
        padding: .25rem;
        cursor: pointer;
        display: flex;
        align-self:flex-start;
        margin-right: .25rem;
        font-family: 'Poppins', sans-serif;`;
        botonRestablecerContrasena.addEventListener("click", restablecerContrasena);
        function restablecerContrasena(){
          alert("no pasó naaaa");
       
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

