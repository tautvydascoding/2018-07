// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";

if (vardas1 == vardas2) {
    console.log("Vardai vienodi");
    document.querySelector('h4').innerHTML += "vardai vienodi";
} else {
    console.log("Vardai yra skirtingi");
    document.querySelector('h4').innerHTML += "vardai yra skirtingi";
}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
    document.querySelector('h2').innerHTML += "Labas Tomai";
} else {

}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("Teisingai");
} else {
    console.log("Netesingai");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

if ((vardas1 || vardas2) == "Tomas") {
    console.log("Vienas vardas Tomas");
} else {
    console.log("Nera tomo");
}


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 6;

// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

if (age <= 7 || age >= 65) {
    if (age >= 65) {
        document.querySelector('h1').innerHTML += "kelione i Bristona";
    }
    document.querySelector('h1').innerHTML += "Pliusines varles";
    document.querySelector('h5').innerHTML += "Sokoladiniai zuikuciai 20% nuolaida";
} else if (age <= 14) {
    document.querySelector('h1').innerHTML += "Mini telefonai";
} else if (age <= 18) {
    document.querySelector('h1').innerHTML += "new Music App";
} else if (age <= 24) {
    document.querySelector('h1').innerHTML += "Stok i sauliu sajunga";
} else if (age <= 65) {
    document.querySelector('h1').innerHTML += "Pensijos kaupimas - zusiregistruok";
}




// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas10 = "Tomas";
if (vardas10 == "Tomas") {
    document.querySelector('h6').innerHTML += "Masinoms 10% nuolaida";
} else if (vardas10 == "Paulius") {
    document.querySelector('h6').innerHTML += "Buitinei technikai  30% nuolaida";
} else if (vardas10 == "Airidas") {
    document.querySelector('h6').innerHTML += "5% nuolaida kelionems";
}

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

var klietoTipas = "silver";
if (klietoTipas == "bronze") {
    document.querySelector('p').innerHTML += "15% nuolaida";
} else if (klietoTipas == "silver") {
    document.querySelector('p').innerHTML += "30% nuolaida";
} else if (klietoTipas == "gold") {
    document.querySelector('p').innerHTML += "5% nuolaida";
}
