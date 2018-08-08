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



// UZDUOTIS:
// sukurti masinos duomenu masyva: pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
// sunkesne:
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

// 
var autoDuom = ["audi", 223334444, 10000, ]; // sukuriamas auto masyvas

// 1. isvedame duomenis:
document.querySelector('h1').innerHTML += "<h3> automobilio masyvas:" + autoDuom + "</h3";

// 2. padidinti kaina: 100

autoDuom[2] += 100;
console.log(autoDuom[2]);

// 3. padidinti rida: -50000

autoDuom[1] -= 50000;
console.log(autoDuom[1]);

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"

autoDuom[3] = "Tomas";
console.log(autoDuom);
document.querySelector('h1').innerHTML += "<h3> automobilio masyvas:" + autoDuom + "</h3";

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

autoDuom[5] = 2004;
document.querySelector('h1').innerHTML += "<h3> automobilio masyvas:" + autoDuom + "</h3";

// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector('body').innerHTML += "<article> </article>"; // sukuriam article

document.querySelector('article').innerHTML += "<h2> <strong>Automobilio Masyvo duomenys:</strong></h2> "; //sukuriam h2 su pavadinimu

document.querySelector('article').innerHTML += "<div> Automobilio savininko vardas: " + autoDuom[3] + "</div>"; //sukuriam div su automob. sav. vardu

document.querySelector('article').innerHTML += "<span> Rida: " + autoDuom[1] + " Automobilio marke: " + " " + autoDuom[0] + "." + " " + "</span>"; //sukuriam span elementa su duomenimis

document.querySelector('article').innerHTML += "<button type='Submit' class='btn-lg'>" + "KAINA" + " " + autoDuom[2] + " $ " + "</button>";