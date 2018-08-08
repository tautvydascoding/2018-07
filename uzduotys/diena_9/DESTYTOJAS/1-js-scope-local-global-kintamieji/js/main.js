console.log(" Labas ");

console.log( window );
var x = 10;

console.log( window.x );

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja
function printDuomenys() {
    var vardas = "Tomas";   // 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"
    console.log( vardas );
}
// console.log( vardas ); // error - vardas nepasiekiamas, nes jis privatus/local

printDuomenys();

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida "is not defined"

// console.log( vardas );


//================local && global=========
// var x = "x global";
// function testLocalVar() {
//    var y = "y local";
//    z = "z global";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS
 // A) sukurti kintamaji var kakis = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var kakis = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos
 var kakis = "juodas";
 function testLocalVar() {
     var kakis = "baltas";
    console.log("kakis:", kakis);
    console.log("this.kakis - f-jos viduje: ",  this.kakis);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 testLocalVar();
 console.log("kakis:", kakis);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"
