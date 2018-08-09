console.log("Labas");


// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
var nr = keliautojas.length;
keliautojas[  nr ] = "butelis vandens";

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift( "ziebt");

// 3. istrinti 3-cia elmenta
keliautojas.splice(3, 1);
console.log("kelaiutojas", keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
var masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
document.querySelector('body').innerHTML +=  "<main>" + masyvas + "</main";


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var k = 50;
var vienetai = [];
while (k > 0) {
    vienetai[k] = 1; // idedu i masyvo stalciu/vagona reiksme
    k--;
}
document.querySelector('body').innerHTML +=  "<section>" + vienetai + "</section";

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// for (var i = 0; i < masyvas.length; i++) {
//     i++;
//     masyvas[i] = 3;
// }
// arba
// for (var i = 1; i < masyvas.length; i +=2) {
//     masyvas[i] = 3;
// }
//arba
// for (var i = 0; i < masyvas.length; i++) {
//     // tikrinu ar stalcius yra lyginis
//     if( i % 2 === 0 ) {
//         masyvas[i] = 3;
//     }
// }
// console.warn("masyvas su 1,3,1:", masyvas);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
var hardMas = [];
for (var i = 0; i < 50; i = i+5) {
    hardMas[i] = 1;
    hardMas[i+1] = 3;
    hardMas[i+2] = 1;
    hardMas[i+3] = 3;
    hardMas[i+4] = 9;
}

console.log( hardMas  );
// var x = 10;
// console.log(   "x yra:",     x );
// console.log(   "x+2 yra:",   x + 2 );
// console.log(   "x yra:",     x );
// console.log(   "x=x+2 yra:", x = x + 2 );
// console.log(   "x yra:",     x );
