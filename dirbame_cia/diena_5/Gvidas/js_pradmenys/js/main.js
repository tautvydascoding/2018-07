
// console.log("labas");
//
// var namas = "daugiabutis";
// var spalva = "geltona A233";
// var aukstuSkaicius = 5;
// var butuSkaiciusAukste = 4;
// var laiptiniuSk = 3;
//
// // uzduotis suskaiciuoti butu skaiciu daugiabutyje
// var laiptinejeButu = aukstuSkaicius * butuSkaiciusAukste;
//
// console.log("butu skaicius laiptineje: ", laiptinejeButu);
// console.log("butu skaicius laiptineje: " + laiptinejeButu);
//
// var skaiciaviami = (560+10) / 10;
// var skaiciaviami2 = 560 + 10 / 10;
//
// console.log(skaiciaviami);
// console.log(skaiciaviami2);

// uzduotis-1
var vardas = "petras";
var pavarde = "pievas";
var amzius = 35;
var atlyginamas = 950;

console.log(    typeof(vardas)  );
console.log(    typeof(pavarde)  );
console.log(    typeof(amzius)  );
console.log(    typeof(atlyginimas)  );

// uzduotis-2
function printVardasPavardeAmzius () {
    console.log("vardas yra:", vardas);
    console.log("pavarde yra:", pavarde);
    console.log("amzius yra:", amzius);
    console.log("atlyginimas yra:", atlyginamas);
}
printVardasPavardeAmzius ();

// uzduotis-3
function printMetinisPajamuDydis () {
    var ats = atlyginamas * 12;
    console.log("metinis atlyginimas:", ats);
}
printMetinisPajamuDydis();

// naujesnis budas
function printMetinisPajamuDydis2 (x) {
    var ats1 = x * 12;
    console.log("jeigu uzdirbu", x, "atlyginimas yra:", ats1);
}
printMetinisPajamuDydis2(650);

// uzduotis-4
var salis = "lietuva";
var miestas = "kaunas";
var adresas = "kursiu g. 7";
var pastoKodas = 55555;

function printAddressData () {
    console.log("salis yra:", salis);
    console.log("mietas yra:", miestas);
    console.log("adresas yra:", adresas);
    console.log("pasto kodas yra:", pastoKodas);
}
printAddressData();

// uzduotis-5
function printTekstas(x) {
    console.log(x);
}
printTekstas( "Jokubo istorijos");

// uzduotis-6 bus teste
function daugyba(x, y) {
    var atsakymas = x * y;
    console.log("atsakymas yra:", atsakymas);
}
daugyba(10, 6);

// uzdutois-7
function pitagoroTeorema(x, y) {
    var ats = (x * x) + (y * y);
    console.log("trikampio ilgoji krastine:", ats);
}
pitagoroTeorema(2, 4);
















//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
