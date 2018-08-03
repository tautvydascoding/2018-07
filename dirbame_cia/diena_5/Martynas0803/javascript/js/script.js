// 1 Uzduotis:

// console.log("labas");


// var vardas = "martynas";
// var pavarde = "urbonas";
// var atlyginimas = 500;
// document.write(vardas);

// console.log(vardas);
// console.log("vardas");
// console.log("vardas:", vardas);
// console.log("vardas:" + vardas);

var namas = "daugiabutis";
var spalva = "geltona";
var aukstuSkaicius = 6;
var butuSkAukste = 4;
var laiptiniuSk = 3;
var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = " Kursiu g. 7 ";
var pastoKodas = 49498;
var vardas = "martynas";
var pavarde = "urbonas";
var amzius = 28;
var atlyginimas = 500;
var metai = 12;

// uzduotis suskaiciuoti butu skaiciu daugiabutyje:

// var ats = 5*4*3; prastas budas, nes reikia naudoti kintamuosius, jei ateityje keisime kintamuju reiksme.
var ats = aukstuSkaicius * butuSkAukste * butuSkAukste;

console.log("butu skaicius daugiabutyje:", ats);
console.log("butu skaicius daugiabutyje:" + ats); // grazina ilga stringa, nes prie stringo pridedam.


// uzduotis suskaiciuoti butu skaiciu daugiabutyje:

var laiptinejeButuAts = aukstuSkaicius * butuSkAukste;

console.log(laiptinejeButuAts);







//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas



teo:
  typeof (k);
// f - ja kuri isveda kintamojo tipa
console.log(typeof (vardas));
console.log(typeof (amzius));



//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
var vardas = "martynas";
var pavarde = "urbonas";
var amzius = 28;
var atlyginimas = 500;

function printVardasPavardeAmzius() {

  console.log(vardas + " " + pavarde + " " + amzius);
}


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function metinisPajamuDydis() {
  var ats = atlyginimas * metai;
  console.log(ats)

}
metinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas



// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

function printAddressData() {
  console.log(salis + " " + miestas + " " + adresas + " " + pastoKodas);
}
printAddressData();



// ---- advance-----
//  5 UZDUOTIS

// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printText(i) {

  console.log(i);
}
printText("labas kaip sekas");
printText("Cia bus tekstas, kuri parases iskviesiu i funkcija");
printText(12);



// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function numDaug(i, x) {
  console.log(i * x);
}
numDaug(2, 9);
numDaug(2, 2);
numDaug(11, 20);
numDaug(11);



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y


function pitagoroTeorema(x, y) {
  console.log((x * x) + (y * y));
}
pitagoroTeorema(2, 2);
pitagoroTeorema(2, 3);
pitagoroTeorema(12, 20);
pitagoroTeorema(8, 10);
pitagoroTeorema(12);

//  trecios uzduoties patobulinimas.


function metineAlga(x) {
  var alga = x;
  var metai = 12;
  var metineAlga = alga * metai;
  console.log("jei uzdirbu ", x + " metinis atlyginimas yra:", metineAlga);

}

metineAlga(100);
metineAlga(500);



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos