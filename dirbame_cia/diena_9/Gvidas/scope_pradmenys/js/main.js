


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja



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
 //    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // test2();
 //
 // console.log("3 katinas:", katinas);

//==========================

 // var xx = 10; // global
 //
 // function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
 //     xx = 20;  // local
 //     console.log( "1. xx:", xx);
 //     console.log( "2. this.xx:",   this.xx);
 // }
 // console.log( "3. xx:", xx);


 //======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
    console.log(x);
}
printAntraste("BMW pinga, nes daugeja");

function printAntraste(x) {
    console.log(x);
}
printAntraste("Greik pageres orai");

function printAntraste(x) {
    console.log(x);
}
printAntraste("Vasaros vis salteja");

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme


function printStraipsnis(x) {
    console.warn(x);
}
printStraipsnis("x");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

var tekstas = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

function lorem1(x) {
    document.querySelector('body').innerHTML += "<h1>Lorem1</h2>"
    document.querySelector('body').innerHTML += "<p>" + tekstas + "</p>"
}
lorem1(tekstas);
function lorem2(x) {
    document.querySelector('body').innerHTML += "<h1>Lorem2</h2>"
    document.querySelector('body').innerHTML += "<p>" + tekstas + "</p>"
}
lorem2(tekstas);
function lorem3(x) {
    document.querySelector('body').innerHTML += "<h1>Lorem3</h2>"
    document.querySelector('body').innerHTML += "<p>" + tekstas + "</p>"
}
lorem3(tekstas);

//=======================================
