// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

keliautojas.push("butelis vandens");
keliautojas.unshift("ziebtuvelis");
delete keliautojas[2];
console.warn(keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
console.log(masyvas);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var t = 0;
while (t<50) {
    masyvas[t] = 1;
    t++;
}
console.warn(masyvas);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


// for (var i = 0; i < masyvas.length; i ++) {
//     i++;
//     masyvas[i] = 3;
// }
// console.log("Masyvas su 1,3,1: ", masyvas);
// arba
for (var i = 0; i < masyvas.length; i++) {
    // tikrinu ar stalciu lyginis
    if (i % 2 === 0) {
        masyvas[i] = 3;
    }
}
console.log("kitas budas: ", masyvas);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// for (var i = 0; i < masyvas.length; i ++) {
//     i++;
//     i++;
//     i++;
//     i++;
//     masyvas[i] = 9;
// }
// console.log("Masyvas: ", masyvas);
//  arba
for (var i = 0; i < masyvas.length; i++) {
    // tikrinu ar stalciu lyginis
    if (i % 5 === 0) {
        masyvas[i] = 9;
    }
}
console.warn("kitas budas: ", masyvas);

// MODULIS
var x = 12;
console.log(x % 5);

// atkreipti demesi !
var x = 10;
console.log("x yra: ", x);
console.log("x+2 yra: ", x + 2);
console.log("x yra: ", x);
console.log("x=x+2 yra: ", x = x + 2);
console.log("x yra: ", x);




//=============bootstrap---sm-md-lg-xl (30-60m)==========
