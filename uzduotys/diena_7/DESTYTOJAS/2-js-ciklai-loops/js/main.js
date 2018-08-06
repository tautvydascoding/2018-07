console.log(" Labas ");


//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

 var alga = 500;
alga = alga + 50;  // 500 + 50
alga += 50;   // alga = alga + 50;

console.log( alga);

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
for (var i = 0; i < 55; i++) {
    console.log("Azuolas \n\n\n" );
}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
var x = document.querySelector('section');
console.log( x );
x.innerHTML = "<h2> Azuolas </h2>";
// arba
 document.querySelector('section').innerHTML +=  "<h2> Azuolas </h2>";

// for (var i = 0; i < 50; i++) {
//     x.innerHTML += "<h2> Azuolas </h2>"; // prie esamos reiksmes prideda nauja
// }

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)
function printX( reiksme ) {
     document.querySelector('section').innerHTML += reiksme; //
}
printX("tesuoju");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 100; i++) {
    var tektas = "tesuoju karta " + i;
    printX(tektas);   // "tekstas" + "tekstas"   = " tetkas tekstas"
    // "tesuoju karta " + i =  "tesuoju karta 0" ,...
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius
var paveikliukas = "<img src='2.jpg' width='100px' alt='neradau foto' >"; // cia ne paveiklsiukas, cia tekstas

document.write( paveikliukas );  // isves failo apacioje
// arba
document.querySelector('h1').innerHTML += paveikliukas; //

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
//
// ----------------------------m
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


function piestiEilute (ilgis) {
    document.querySelector('h1').innerHTML += "<br>";
    for (var i = 0; i < ilgis; i++) {
            document.querySelector('h1').innerHTML += "-";
            console.log('-');
    }
    document.querySelector('h1').innerHTML += "<br>";
}
function piestiStulpeli(){
document.write("|", "|");
document.querySelector('h1').innerHTML += "|";
}
piestiEilute (50);
piestiStulpeli();

piestiEilute (50);



// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
