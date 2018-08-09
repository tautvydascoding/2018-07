// console.log("Labas");

//------
// UZDUOTIS // UZDUOTIS
// A) sukurti kintamaji var katinas = "juodas"
var katinas = "juodas";
var katuks = "zalias";
// B) sukurti f-ja


function katinuks() {
  // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
  var katinas = "baltas";
  // D) atspauzdinti abu f-jos viduje
  console.log("balti:", katinas, this.katuks);

}
katinuks();
// E) atspauzdinti  uz f-jos
console.log("juodi:", katinas, katinas);



// var katinas = "rudas";
var katinas = "juodas"; //global
// var katinas = "geltonas"; //global

function tiest2() {
  var katinas = "baltas"; // local
  console.log("1 katinas:", katinas);
  console.log("2 this.katinas - f-jos viduje: ", this.katinas); // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
}
tiest2();
//
console.log("3 katinas:", katinas);

//==========================

var xx = 10; // global

//
function isvesti(xx) { // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
  xx = 20; // local
  console.log("1. xx:", xx);
  console.log("2. this.xx:", this.xx);
}
isvesti(xx);
console.log("koks yra xx",
  xx);
console.log("3. xx:", xx);


//======================
// var vardas = "Jonas";   // global - kintamasis
// function myName ( vardas ) { //  vardas - local kintamasis
//     console.log( " vardas" + vardas);
//     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
// myName("PETRAS");


console.log("labas");

// =================taisyklingas Array copy  =================
var arr1 = ['a', 'b', 'c']; // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0); // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(); // Becomes arr2b = ['a', 'b', 'c'] - deep copy

var arr2 = arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// ================= ========= ======== ========


// UZDUOTIS



console.log

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

ieskomiZmones = [2, 16, 17, 18, 19, 25];
var vardas2 = names.slice(2, 3);
var vardasNuo16Iki20 = names.slice(16, 20);
var vardas25 = names.slice(25, 26);

console.log("vardas 2: ", +" " + vardas2, "vardas nuo 16 iki 20:", vardasNuo16Iki20 + " vardas 25 ", vardas25);

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
var atlyginimas = 500;
var arPasikeite = false;
// UZDUOTIS
// A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji
// 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima
// -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
atlyginimas += 100; // atlyginimas = atlyginimas + 100;
if (atlyginimas > 500) {
  console.log(" atlyginimas pasikeite");
} else {
  console.log("  atlyginimas toks pats ");
}
// suprogramuoti patikrinima (su if), kad isvestu zinute
if (atlyginimas > 500) {
  arPasikeite = true;
}
// ar cia tiesa??
if (arPasikeite) {
  console.log(" atlyginimas pasikeite");
} else {
  console.log("  atlyginimas toks pats ");
}



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)


// IESKOM VIENO RICKO
// var nr = -9999;
// var ieskomas = "Rico"
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === ieskomas) {
//     nr = i;

//     break; // nutraukia loop ( tam kad toliau nebeieskoti)
//   }
// }
// document.querySelector('body').innerHTML += "<div class='bg-info'> Rico numeris" + nr + "</div>";


// var nr = -9999;

// // IESKOME VISU RICKU MASYVE
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === "Rico") {
//     nr = i;
//     document.querySelector('body').innerHTML += "<div class='bg-info'> Rico numeris" + nr + "</div>";
//     // break; // nutraukia loop ( tam kad toliau nebeieskoti)
//   }
// }


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

var nr = -9999;
var ieskomas = "Rico"
var radom = "Rico rastas";
var neradom = "Deja Rico nerastas";
var ricky = [];
var neRicky = " ";

// IESKOME VISU RICKU MASYVE
console.log("IESKOME RICKO, IR NURODOME, AR JIS RASTAS AR NE:");

function ieskom(x) {
  for (var i = 0; i < names.length; i++) {
    if (names[i] === x) {
      // console.log("Cia tikrinimo tekstas", radom);
      ricky.push(names[i]); // itraukem rastus duomenis i nauja masyva
      // console.log("Masyve toks ", ricky[i]);
    } else {
      // console.log("Masyve tokio nera");
    }
  }
  // Tikrinam ar ivesta reiksme sutampa su reiksme esancia sukurtame masyve.
  if (x === ricky[0]) {
    console.log("Masyve toks " + ricky[0] + " Yra"); // jei randa tai paraso taip
  } else {
    console.log("Masyve tokio Nera"); // jei neranda
  }

}


var ats = ieskom("Ala");
console.log(ats);


// for (var i = 0; i < names.length; i++) {
//   if (names[i] === ieskomas) {
//     return radom;
//   } else if (names[i] != ieskomas) {
//     return neradom
//   }
// }

// console.log(radom);

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// 2 UZDAVINYS SU INDEX OF:

// var nr = names.indexOf("Rico");

// function getStalciausNumeris(x) {
//   var nr = names.indexOf(x);
//   return nr;
// }

// var atsakymas = getStalciausNumeris("Rico");
// console.log(" Rico yra ", atsakymas)


// TAS PATS 2 UZDAVINYS SU FOR LOOP:

function getStalciausNumeris2(ieskom) {
  for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskom) {
      return i;
    }
  }
  return null
}
var atsakymas = getStalciausNumeris2("Rico")
console.log(atsakymas);

// // IESKOME VISU RICKU MASYVE
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === "Rico") {
//     nr = i;
//     document.querySelector('body').innerHTML += "<div class='bg-info'> Rico numeris" + nr + "</div>";
//     // break; // nutraukia loop ( tam kad toliau nebeieskoti)
//   }
// }
// // IESKOME VISU RICKU MASYVE
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === "Rico") {
//     nr = i;
//     document.querySelector('body').innerHTML += "<div class='bg-info'> Rico numeris" + nr + "</div>";
//     // break; // nutraukia loop ( tam kad toliau nebeieskoti)
//   }
// }

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// surandame freidos index numeri masyve "name"
var freida = names.indexOf("Freida");
console.log("freidos indeksas masyve", freida); //atspausdiname

// zinodami, koks friedos indeksas "name" masyve ji nukopiname
var freidosPavarde = lastNames.slice(37, 38);

console.log("Freidos pavarde yra: ", freidosPavarde);



// 4) rasti visu zmoniu vardu "Rico" pavardes

//   su for loop surandame masyve Ricku index nr . TOKS SPRENDIMO BUDAS NERA TINKAMAS, NES REIKIA DARYTI AUTOMATISKAI
for (var i = 0; i < names.length; i++) {
  if (ieskomas === names[i]) {
    console.log(i);
  }
}

// istraukiame Ricku pavardes:
var Ricky25 = lastNames.slice(25, 26);
var Ricky28 = lastNames.slice(28, 29);
var Ricky47 = lastNames.slice(47, 48);

console.log(" Ricky 25 pavarde yra:", Ricky25 + " " + " Ricky 28 pavarde yra: ", Ricky28 + " Ricky 47 pavarde yra: ", Ricky47);

var pat = lastNames.indexOf("Montgomery");
var pat2 = lastNames.indexOf("Gregory");
var pat3 = lastNames.indexOf("Moon");

console.log(" PATIKRA DEL PAVARDZIU: ", pat, pat2, pat3);

// ARBA 

for (var i = 0; i < names.length; i++) {
  if (names[i] === ieskomas) {
    console.log("Rico", lastNames[i]);
  }
}

console.log("--------- 5 uzduotis ----------- ");
// 5) Turime masyva su zmoniu nr.  
ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius
numeris = -999999;
for (var i = 0; i < ieskomiZmones.length; i++) {
  numeris = ieskomiZmones[i];

  // A) atspausdinti visus numerius
  console.log(names[numeris] + " " + lastNames[numeris]);
}
// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }