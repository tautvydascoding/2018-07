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
var x = getVardas1(); // arba  console.log(  getVardas1() );
console.log(x);

// 2
function setVardas2(name) {
  vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

// 3
function getVardas3() {
  return vardas + "3";
}
x = getVardas3(); // arba  console.log(  getVardas3() );
console.log(x);

// 4
function setVardas4(name) {
  vardas = name + "4";
}
setVardas2("juozas"); // sugalvoti vis kita zodi

// 5
// matematinis veiksmas


// Daugyba 1
function daugink(x, a) {
  var daugyba = x * a;
  return daugyba;
}
console.log(daugink(2, 3, 2));

// Dalyba 2
function dalink(x, y) {
  var dalyba = x / y;
  return dalyba;
}
console.log(dalink(9, 3));

//  vardas 3


var vardas = "angele";

function vardasZmogaus() {

  return vardas + " 4";
}
console.log(vardasZmogaus())

// 4



function markoName(vardas) {
  return vardas + " geras zmogus";
}
console.log(markoName("Algis"))

// 5

function grazusVardas(vardas) {
  return vardas + ", koks grazus tavo vardas";
}

console.log(grazusVardas("Gintare"))

// 6
var suo = "djukas";

function ArDjukas() {
  return suo
}
console.log(ArDjukas());

// 7

function vardasPavarde(vardas, pavarde) {
  return vardas + pavarde + ", matai kaip grazu " + "?"
}
console.log(vardasPavarde("Martynas", " Urbonas"));

// 8

function vardasPavardeAmzius(vardas, pavarde, amzius) {
  return "mano vardas " + vardas + " o pavarde yra " + pavarde + "." + " Ir as galiu pirkti alkoholi, nes man jau " + amzius;
}
console.log(vardasPavardeAmzius("martynas", "Urbonas", 28))

// 9

function pavarde(pavarde) {

  return pavarde + " o koks vardas ?";
}
console.log(pavarde("Urbonas"));

// 10

function pavarde1(pavarde) {
  return pavarde + "wow";
}
console.log(pavarde("Perikas"));

// 11
function pavarde3() {
  var pavarde = "Urbonas";
  return pavarde + " yra lietuviska pavarde"
}
console.log(pavarde3())

// 12
function vardasMano(vardas) {
  return vardas;
}
console.log(vardasMano("labas"))

// 13
function pavardeMano(pavarde) {
  return pavarde;
}

console.log(vardasMano("Martynas") + " " + pavardeMano("Urbonas"))