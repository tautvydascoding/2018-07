// console.log("Labas");

// // =================if  teorija====================
// // if ( true ) {
// //     console.log("labas");
// // }

// // if (salyga) {
// //     // jei true
// //     //
// //     //
// // } else {
// //     // jei false
// // }


// // if ( salyga ) {
// //     // jei salyga tenkinama
// // }
// //
// // if ( salyga ) {
// //     // jei salyga tenkinama
// // } else {
// //     // jei salyga netenkinama  / priesingu atveju
// // }
// //
// // if (salyga) {
// //
// // } else if (salyga) {
// //
// // } else {
// //     // ?
// // }

// //=============IF====================
// // 0 UZDUOTIS
// // A)
// // susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// // patikrinti:
// // jeigu vardai sutampa, i konsole pranesti apie tai
// // jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

// var vardas1 = "tomas";
// var vardas2 = "alojka";

// if (vardas1 === vardas2) {
//   document.querySelector('h1').innerHTML = "vardas sutampa";
// } else {
//   document.querySelector('h1').innerHTML = "vardas skiriasi";
// }


// // B)
// // Papildomai patikrinti uzdavini A.
// // Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// if (vardas1 === "tomas") {
//   document.querySelector('h2').innerHTML = "<h2>labas tomai</h2>";
// }
// // C)
// // Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// var vardas2 = "karolis";
// var vardas1 = "tomas";

// if ((vardas1 === "tomas") && (vardas2 === "karolis")) {
//   document.querySelector('h3').innerHTML = "<h3> vardas1 yra tomas ir vardas 2 yra karolis</h3>";
// } else {
//   document.querySelector('h3').innerHTML = "<h3> deja, nei vienas is vardas1 ir vardas2 nera tomas</h3>";
// }


// // D)
// // Patikrinti ar bent vienas is vardu "Tomas"
// // || - arba

// if ((vardas1 == "karo") || (vardas2 == "tomas")) {
//   document.querySelector('h4').innerHTML = "<h4> bent vienas is vardas1 arba vardas1 yra tomas </h4";
// } else {
//   document.querySelector('h4').innerHTML = "<h4> deja, nei vienas is vardu vardas1 nera tomas </h4";
// }

// // 1 UZDUOTIS

// // turesime vartotojo amziu
// var age = 3;
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

// if (age < 7) {
//   document.querySelector('h1').innerHTML = "Jums suteikiama reklama 'Pliusines varles'";
// } else if (age < 14) {
//   document.querySelector('h1').innerHTML = "Jums suteikiama reklama 'Mini telefonai'";
// } else if (age < 18) {
//   document.querySelector('h1').innerHTML = "Jums suteikiama reklama 'new Music App'";
// } else if (age < 24) {
//   document.querySelector('h1').innerHTML = " Mes jums siulome stoti i 'Stok i sauliu sajunga' ";
// } else if (age < 65) {
//   document.querySelector('h1').innerHTML = " ar girdejote apie: 'Pensijos kaupimas - usiregistruok' ";
// } else if (age >= 65) {
//   document.querySelector('h1').innerHTML = " Jus laimejote: 'kelione i Bristona' ";
// }

// if ((age <= 7) || (age > 65)) {
//   if (age < 7) {
//     document.querySelector('h1').innerHTML = " Jums suteikiama nuolaida: 'Sokoladiniai zuikuciai 20% nuolaida' ";
//   } else {
//     document.querySelector('h1').innerHTML = " Jums suteikiama nuolaida: 'Sokoladiniai zuikuciai 20% nuolaida' ";
//   }
// }





// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// var klausimas = prompt("Pasirink varda- gauk nuolaida. rinkis: tomas : paulius ar airidas ");
// var atsakymas = "tomas";
// var atsakymas = "paulius";
// var atsakymas = "airidas";



// if (klausimas === "tomas") {
//   document.querySelector('h2').innerHTML = " SVEIKINAME: 'mASINOMS 10% NUOLAIDA'";
// } else {
//   document.querySelector('h2').innerHTML = " SVEIKINAME: '5% nuolaida kelionems'";
// }

// if (klausimas === "paulius") {
//   document.querySelector('h2').innerHTML = " SVEIKINAME: 'Buitinei technikai  30% nuolaida'";
// }
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


// var klientoTipas = prompt("kokia nuolaidos norite: bronze, silver, gold ar paprasta");

// if (klientoTipas === "bronze") {
//   klientoTipas = document.querySelector('h2').innerHTML = " 15% nuolaida";
// } else if (klientoTipas === "silver") {
//   klientoTipas = document.querySelector('h2').innerHTML = " 35% nuolaida";
// } else if (klientoTipas === "gold") {
//   klientoTipas = document.querySelector('h2').innerHTML = " 55% nuolaida";
// } else {
//   document.querySelector('h2').innerHTML = " 5% nuolaida"
// }

// if ((klientoTipas === bronze) || (klientoTipas === silver) || (klientoTipas === gold)) {
//   klientoTipas = document.querySelector('h2').innerHTML = " 15% nuolaida";
//   klientoTipas = document.querySelector('h2').innerHTML = " 35% nuolaida";
//   klientoTipas = document.querySelector('h2').innerHTML = " 55% nuolaida";
// } else {
//   document.querySelector('h2').innerHTML = " 5% nuolaida"
// }

// if (klientoTipas === bronze) {
//   document.querySelector('h2').innerHTML = " 15% nuolaida";
// }

// if (klientoTipas === silver) {
//   document.querySelector('h2').innerHTML = " 30% nuolaida";
// }

// if (klientoTipas === gold) {
//   document.querySelector('h2').innerHTML = " 45% nuolaida";
// }


// ============LOOOOOOPPPPPPPSSSSSSSS========---


//==============TEORIJA ++ / -- ==========
var x = 10;
x = x + 3; // x = 13
x += 3; // tas pats kad x = x + 3;
x++; //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)


for (i = 0; i < 50; i++) {
  document.querySelector('h3').innerHTML += " azuolas";
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML


// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// for (i = 0; i < 50; i++) {
//   document.querySelector('article').innerHTML += 2;
// }


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(xx) {
  document.querySelector('h2').innerHTML += xx;
}
printX("labas");


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (i = 0; i < 100; i++) {
  printX("<br>simta kartu");
}



// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

// for (i = 0; i < 12; i++) {
//   printX("<br>dvylika kartu");
//   document.querySelector('body').innerHTML += " <img src='img/as.jpg' alt='img' width='200' height='220' name='as'> ";
//   // document.querySelector('body').innerHTML += "<img> "
// }


// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function piestiEilute(ilgis) {
  var x = "";
  for (i = 0; i < ilgis; i++) {
    x = x + "-";
  }
  // console.log(x);


}
piestiEilute(10);
piestiEilute(10);

function spausdintasStulpelis(stulpelis) {
  var y = " ";
  for (a = 0; a < stulpelis; a++) {
    y = y + "|"
  }
  console.log(y);
}
spausdintasStulpelis(5)

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1; // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======