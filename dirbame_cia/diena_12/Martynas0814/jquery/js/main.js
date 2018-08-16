console.log("Labas rytc");
// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console

var foto = $(" <img src= ''../kir.jpg' alt='cia pokemono foto'width='200' height='200' >");

console.log(foto);

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
var header = $("<header/>");
console.log(header);

var footer = $("<footer/>");
console.log(footer);

$("body").prepend(header);

$("body").append(footer);
// 1.2
// i <header> ir <footer> ideti <img> elementa

$("header").append(foto);
$("footer").append(foto);