console.log("Labas");

// sukurti tuscia masyva "prekiautojai";
// 1.2 uzpildyti masyva prekiautojais, pvz senukai, ir pan.;
// 1.3 isvesti i console ar ekrana visa masyva.
var prekiautojai = ["Senukai", "Moki-vezi", "Lemora", "lidl"]; // empty array/masyvas
document.querySelector('h1').innerHTML = prekiautojai[2];


prekiautojai[3] = "Ermitazas"; // 1.4 pakeiciamas "lidl" i Ermitaza.
prekiautojai[4] = "Iki"; // 1.5 pridedamas naujas prek.centras.
prekiautojai[5] = "Lonas" // prideamas dar vienas prek. centras su ciuziniais
document.querySelector('h1').innerHTML = prekiautojai;

//2 ) sukeisti antro ir trecio stalciu reiksmes vietomis.
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// MASYVO INDEXSO SUKEITIMAS

var temp = prekiautojai[0]; // issaugom keiciama elementa i temp
prekiautojai[0] = prekiautojai[3]; // perkialiam i index 0
prekiautojai[3] = temp; // grazinam issaugota elementa i 3 indeksa

document.querySelector('body').innerHTML += "<h2>Is ketvirtos vietos i pirma soka: " + prekiautojai[3] + "</h2>";
console.log(prekiautojai[3]);

// 3 uzdavinys: sukurti funkcija sukeistiMasEl(x,y); du elementus;

function sukeistiMasEl(x, y) {
  var temp = prekiautojai[x]; // issisaugau x reiksme i temp
  prekiautojai[x] = prekiautojai[y]; // x reiksme pakeiciu i y reiksme;
  prekiautojai[y] = temp; // y reiksme pakeiciu i issaugota temp

}
console.log(prekiautojai);
sukeistiMasEl(2, 3);
console.log(prekiautojai);