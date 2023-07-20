window.addEventListener("scroll", function(){
    var minav = this.document.querySelector("header");
    minav.classList.toggle("abajo", this.window.scrollY>0);
})

const btn_menuH = document.querySelector(".btn_menuH");
const nav_responsive = document.querySelector("nav");

btn_menuH.addEventListener('click', () => {
    btn_menuH.classList.toggle('activo');

    if (btn_menuH.classList.contains('activo')) {
        nav_responsive.classList.add("responsive");
    } else {
        nav_responsive.classList.remove("responsive");
    }
   
});

//modo oscuro
const botonModo = document.querySelector(".boton-mode");
botonModo.addEventListener("click", cambiarModo);

function cambiarModo(){
    var body = document.querySelector("body");

    body.classList.toggle("modo-noche");
    if(body.classList.contains("modo-noche")){
        botonModo.innerHTML = `<input type="image" class="icono-mode" src="../imagenes/sol-icon.svg" alt="">`;
        body.style.background= "var(--modo-noche)";
    }else{
        botonModo.innerHTML = `<input type="image" class="icono-mode" src="../imagenes/luna-icon.svg" alt="">`;
        body.style.background= "var(--fondo-tema)";
    } 

}