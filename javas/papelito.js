let meses = ["Enero","Febrero","Marzo","Abril",
            "Mayo","Junio","Julio","Agosto","Septiembre",
            "Octubre","Noviembre","Diciembre"]
let date = new Date();

let diaMes = date.getDate();
let mes = meses[date.getMonth()];
let año = date.getFullYear();

let fecha = document.querySelector(".fecha");
fecha.textContent = diaMes + "/" + mes + "/" + año;

setInterval(() => {
  let boxHora = document.querySelector(".hora");
  let fechaActual = new Date();
  let hora = fechaActual.getHours();
  let minutos = fechaActual.getMinutes();
  let segundos = fechaActual.getSeconds();
  if (minutos <= 9) {
    boxHora.textContent = hora + ":0" + minutos + ":" + segundos;

  }else{
    boxHora.textContent = hora + ":" + minutos + ":" + segundos;
  }
}, 1000);

function cambiaAMPM(){
  var periodo = document.querySelector(".periodo");
  if (periodo.textContent=="p.m") {
    periodo.textContent= "a.m";
  } else {
    periodo.textContent= "p.m";
  }
}
function generarPermiso() {

  var resultado = document.querySelector(".resultado");
  var img = resultado.querySelector("img");

  if (img) {
    resultado.innerHTML = ` `;
  }
    html2canvas(document.querySelector(".hoja")).then(function(captura){
      // el SRC DE LA IMG crear
      var img = new Image();
      img.src = captura.toDataURL();

      // se generooo y se agrego
      resultado.innerHTML = ` `;
      resultado.appendChild(img);
      
    });
}
function cancelarPermiso(){
    var resultado = document.querySelector(".resultado");
    resultado.innerHTML = `<h1>Aqui se generara su permiso</h1> `;

}
