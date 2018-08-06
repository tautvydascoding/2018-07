console.log("Labas");
// UZDUOTIS =======ismokti f-jas 50x===============
// A) sukurti kintamaji "vardas" Tomas
// B) sukurti 50 f-ju.
// nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// lygines f-jos turi pakeisti varda ir uzdeti skaiciu salia
// NOTE: visas f-jas iskviesti
// pvz.:
var vardas = "Tomas";
// 1
function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );

// 2
function setVardas2(name) {
   vardas = name + "2";
   return vardas;
}
var a = setVardas2("antanas"); // sugalvoti vis kita zodi
console.log( a );
// 3
var vardas = "Tomas";

function getVardas3() {
  return vardas + "3";
}
var a =  getVardas3();  // arba  console.log(  getVardas3() );
console.log(  a );

// 4
function setVardas4(name4) {
   vardas4 = name4 + "4";
   return vardas4;
}
 var a4 = setVardas4("juozas"); // sugalvoti vis kita zodi
console.log( a4 );
// 5

var vardas5 = "Tomas"

 function getVardas5() {
   return vardas5 + "5";
 }
  var x = getVardas5();
  console.log( x );
//
var vardas7 = "Tomas"
function getVardas7() {
  return vardas7 + "7";
}
var x7 = getVardas7();
console.log( x7 );
//8
var vardas9 = "Tomas";

function getVardas9() {
  return vardas9 + 9;
}
var x9 = getVardas9();
console.log( x9 );
//
var vardas11 = "Tomas";
function getVardas11() {
  return vardas11 + 11
}
var x11 = getVardas11()
console.log( x11 );
//
function Name6( name6 ) {
  name6rezultatas = name6 + "6";
  return name6rezultatas;
}
var x6 = Name6( "Birute" );
console.log(x6);
//8
function Name8( name8 ) {
  var rezultatas8 = name8 + "8";
  return rezultatas8;
}
var x8 = Name8("Jonukas");
console.log(x8);
// 10
function Name10( name10 ) {
  var rezultatas10 = name10 + "10";
  return rezultatas10;
}
var x10 = Name10( "Antanina");
console.log( x10 );
//
var vardas12 = "Tomas";
function vardas12Tomas() {
  var rezultatas12 = vardas12 + "12";
  return rezultatas12;
}
var x12 = vardas12Tomas();
  console.log( x12 );
//13
function vardas13( kintamasis13 ) {
   var rezultatas13 = kintamasis13 + "13";
   return rezultatas13;
}
var x13 = vardas13( "Jenifer" );
console.log( x13 );
//14
var kintamasis14 = "Tomas";
function vardas14() {
    var  rezultatas14 = kintamasis14 + "14";
    return rezultatas14;
}
var x14 = vardas14();
console.log(x14);
