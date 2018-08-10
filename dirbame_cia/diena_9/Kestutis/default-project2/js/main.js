console.log("Labas");

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
  var vardas = "Tomas";
  console.log( vardas );
}

printDuomenys();

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""

//================local && global=========
//var x = "x -viesas ";   // global
//function testLocalVar() {
//    var y = "y -vietinis ";  // local
//    z = "z -viesas";        // global // nereiketu taip daryti
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
//}
//testLocalVar();
//console.log("x", x);
//console.log("z", z);
//console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

  // var katinas = "juodas";   //global
  //
  // function test2() {
  //     var katinas = "baltas";  // local
  //    console.log("1 katinas:", katinas);
  //   console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
  // } test2();

  // console.log("3 katinas:", katinas);




//======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //    console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

// function printAntraste(x) {
//   document.querySelector('body').innerHTML += "<h3>"+x+"</h3>";
// }
//
// printAntraste("BMW pinga, nes daugeja");
// printAntraste("Greik pageres orai");
// printAntraste("Vasaros vis salteja");
// //  1.2 UZDUOTIS
// //  sukurti funkcija "printStraipsnis(x)" ,
// //  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//
// //  1.3 UZDUOTIS
// //  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",
// var y = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
//
// function straipsnei (antraste) {
//   document.querySelector('body').innerHTML += "<h4>"+antraste+"</h4>"+"<br>"+y ;
// }
//
// straipsnei ( "Vaizdai" );
// straipsnei ( "Garsai" );
// straipsnei ( "Muzika" );
//=======================================

// console.log("labas");
//
// // =================taisyklingas Array copy  =================
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
//
// var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// ================= ========= ======== ========


// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
    var atlyginimas = 500;
    var arPasikeite = false;
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji
    // 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima
    // -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
    if ( atlyginimas > 500) {
            console.log(" atlyginimas pasikeite");
    } else {
           console.log("  atlyginimas toks pats ");
    }
    // suprogramuoti patikrinima (su if), kad isvestu zinute
    if ( atlyginimas > 500) {
        arPasikeite = true;
    }
    // ar cia tiesa??
    if ( arPasikeite ) {
            console.log(" atlyginimas pasikeite");
    } else {
           console.log("  atlyginimas toks pats ");
    }



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zo
//   for (var i = 0; i < names.length; i++) {
//     if (names[i] === "Rico") {
//       nr =i;
//       break;
//     }
//
// }
// document.querySelector("body").innerHTML +=
// "<h3> Rico numeris " +nr+ "</h3>";
//
// var ieskomasis = "Rico"
//
// for (var i = 0; i < names.length; i++) {
//   if (names[i] === ieskomasis) {
//     document.querySelector("body").innerHTML +=
//     "<h3> Rico numeris " +i+ "</h3>";
//   }
//
// }


// var arRadau = 0;
// //
//  for (var i = 0; i < names.length; i++) {
//    if ( names[i] == "Rico" )
//     {
//
//             arRadau = 1;
//
//         document.querySelector("body").innerHTML += "<h3>Radome</h3>";
//
//       }
//         if (arRadau === 0  ) {
//
//
//           document.querySelector("body").innerHTML += "<h3>NEPAVYKO RASTI</h3>";
//
//     }
//  }
 var arRadau = 0; // false  "neradau"
 for (var i = 0; i < names.length; i++) {  // names.legnth - grazinau masyvo ilgi
      if ( names[i] == "Kavaliauskas" ) { // i = 0, 1, 2, 3, 4 .....iki length
         arRadau = 1;
         console.log("Radau. Jo stalcius " + i);
      }
 }
 // tikriname ar radome
 if (arRadau === 0  ) {
     console.log("NEPAVYKO RASTI");
 }


 function getStalciausNumeris ( ieskomasTekstas ) {

    for (var i = 0; i < names.length; i++) {
        // console.log( ieskomasTekstas);  // pasitikrintti ar is vis veikia
        // console.log( names[i] );       // pasitikrintti ar is vis veikia

        // console.log("ieskau");
        if( ieskomasTekstas == names[i]) {
            console.log("radau");
            return  i;
        }
    }
}

var x = getStalciausNumeris("Rico");
 document.querySelector('body').innerHTML += "<h1>"+x+"</h1>";
// var nr = getStalciausNumeris("Rico");
// console.log( "ieskomo numeris"  + nr );
// nr = getStalciausNumeris("Jonas");
// console.log( "ieskomo numeris"  + nr );   // kai neranda, grazinamas "-1"

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
function ieskauVardo() {
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Freida") {
      return i;
    }

      }
    }

var rastasSkaicius = ieskauVardo();
console.log(lastNames[rastasSkaicius]);




// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {

  var ieskomasNumeris = ieskomiZmones[i];
  var ieskomasVardas = names[i];
  var ieskomaPavarde = lastNames[i];
    console.log( " Ieskotas zmogus " + ieskomasNumeris );
    console.log( " ieskotas zmogus " + ieskomasVardas + " " + ieskomaPavarde );
}
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
