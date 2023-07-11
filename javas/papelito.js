let meses = ["Enero","Febrero","Marzo","Abril",
            "Mayo","Junio","Julio","Agosto","Septiembre",
            "Octubre","Noviembre","Diciembre"]
let date = new Date();

let diaMes = date.getDate();
let mes = meses[date.getMonth()];
let año = date.getFullYear();

let fecha = document.querySelector(".fecha");
fecha.textContent = diaMes + "/" + mes + "/" + año;


function generarImagen() {
  var resultado = document.querySelector(".resultado");
  var img = resultado.querySelector("img");

  if (img) {
    resultado.removeChild(img);
  }
    html2canvas(document.querySelector(".hoja")).then(function(captura){
      // el SRC DE LA IMG crear
      var img = new Image();
      img.src = captura.toDataURL();

      // se generooo y se agrego
      resultado.appendChild(img);
      
    });
}
function enviarAPorteria(){
    var resultado = document.querySelector(".resultado");
    resultado.innerHTML = ` `;
}
let hora = document.querySelector(".hora");
hora.innerHTML="hola";
