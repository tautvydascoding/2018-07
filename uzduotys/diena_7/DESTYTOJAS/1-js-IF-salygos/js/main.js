console.log(" Labas ");



//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";
if ( vardas1 == vardas2 ) {
    console.log("vardai vienodi ");
} else {
    console.log(" vardai skirtingi ");
}


// B.1)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas") {
    // console.log("Labas ", vardas1);
}

// B.2)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - Netikrinti ar vardai sutampa ar nesutampa
//vardas1 = "Tomas";
//if (vardas1 == "Tomas"){
//    console.log("labas tamai");
//} else if ( vardas1 == vardas2 ) {
//    console.log("vardai tikrai vienodi ");
//} else if (vardas1 != vardas2) {
  //  console.log(" vardai tikrai skirtingi ");
//}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
//vardas1 = "Tomas";
//vardas2 = "Karolis";

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

// iki 7 metu
// "Pliusines varles"
//
// nuo 7 iki 14
// "Mini telefonai"
//
// nuo 14 iki 18
// "new Music App"
//
// nuo 18 iki 24
// "Stok i sauliu sajunga"
//
// nuo 24 iki 65
// "Pensijos kaupimas - zusiregistruok"
// nuo 65
// "kelione i Bristona"
// sunkesne:
// iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"
var age = 6;
// jeigu amzius mazesnis nei 7 metai
//if (age < 7 ) {
//    console.log( "Pliusines varles");

    // ar amzius nuo 7 iki 14
//} else if ( age >= 7 &&  age < 14) {
//    console.log(  "Mini telefonai");
//} else if (true) {

//}


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

function VardasLygus(vardas1){
var vardas1;

if( vardas1=="Tomas"){
document.write("vardas ", vardas1);
}
 else if( vardas1 =="Paulius"){
document.write("vardas 2 ", vardas1);
}
 else if(vardas1=="Algirdas"){
document.write("vardas 3 ", vardas1);
}

return vardas1;
	
}

VardasLygus("Paulius");



