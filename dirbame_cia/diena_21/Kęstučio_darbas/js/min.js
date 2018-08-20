console.log("Labas");


var rezutatas = "";

//var keliones = ["Karpatai", "Kalifornijos kalnai", "Islandijos kalnai", "Alpės"];
var keliones = [ 1200, 30150, 1980, 1500 ];



function pakeistiPavadinima() {
  document.getElementById('Viezbucio pavadinimas').innerHTML += "Viežbutis karpatų kalnuose" ;
  console.log("funkcija veikia");
}

document.getElementById('karpatai').onclick = pakeistiPavadinima ;
var paspaude = document.getElementById('karpatai').onclick;
$(document).ready(function() {
    $("#karpatai").click(function() {
      $("#Viezbucio pavadinimas").text("Viežbutis karpatų kalnuose");
  });
});
