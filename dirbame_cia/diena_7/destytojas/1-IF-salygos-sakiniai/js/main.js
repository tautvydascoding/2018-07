console.log("Labas");




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
    console.log("vardai yra vienodi");
    document.querySelector('h1').innerHTML += "  vardai yra vienodi";
} else {
    console.log("vardai yra skirtingi :( ");
    document.querySelector('h1').innerHTML += "  vardai yra skirtingi :(";
}
// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    document.querySelector('h1').innerHTML = "  Tomas ir Karolis";
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
if (vardas1 == "Tomas" || vardas2 == "Tomas") {
    document.querySelector('h1').innerHTML = "  vienas is vardu: Tomas  ";
}

// 1 UZDUOTIS
// turesime vartotojo amziu
var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


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


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
