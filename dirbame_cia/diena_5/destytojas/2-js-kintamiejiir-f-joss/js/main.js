console.log("Labas");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var vardas = "TOmas";
var pavarde = "Tomauskis";
var amzius = 21;
var atlyginimas = 650;
var skolos = 0;
var adresas = "";

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log( "vardas yra ",  vardas );
    console.log( "pavarde yra ",  pavarde );
    console.log( "amzius yra ",  amzius );
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
    var atsakymas = atlyginimas * 12;
    console.log( "atlyginimas yra: ",   atsakymas );
}
printMetinisPajamuDydis( );

// B.
function printMetinisPajamuDydis2(x) {
    var atsakymas = atlyginimas * 12;
    console.log( "jei uzdirbu",   x ,   " atlyginimas yra: ",   atsakymas );
}
printMetinisPajamuDydis( 1100 );

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
    console.log(  x  );
}

printTekstas( "Labas karsti");
printTekstas( "Petriukas klausia mamos ...");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
