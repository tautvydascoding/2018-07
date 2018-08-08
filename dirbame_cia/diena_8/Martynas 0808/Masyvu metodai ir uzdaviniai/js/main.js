console.log("Labas");

var lietuva = ["kaunas", "klaipeda", "vilnius"];
console.log(lietuva);

var str = lietuva.toString(); // masyvas neisnyksta

console.log(str);

// susikodiman   savo toString metoda, kuris yra limituotas iki 3 masyvo elementu.

function manoToString(arrai) {
  var tekstas = arrai[0] + arrai[1] + arrai[2];
  return tekstas;
}
var ilgasTekstas = manoToString(lietuva);
console.log(ilgasTekstas);
//

var grazusTekstas = lietuva.join(" "); // join galima nurodyti skyrikli( dolerio zenklas, dvitaskis, kombinacija)
console.warn(grazusTekstas);

// pop() trina paskutini masyvo nari
lietuva.pop(); // trinam
console.log(lietuva) // tikrinam


// push() ideda i masyvo GALA. reikia nurodyti parametruose ka deti.
lietuva.push("TRAKAI"); // ideda
console.log(lietuva); // patikriname


//unshift() idedame i masyvo prieki elementa, kuri nurodome parametruose
lietuva.unshift("Taurage"); // pridedame taurage i masyvo prieki
console.log(lietuva); // tikriname

// shift - istrina is masyvo pirma elementa

lietuva.shift(); // atimame is masyvo pradzios elementa
console.log(lietuva); // patikriname

//

var miestuSk = lietuva.length; // length - masyvo elementu kiekis.

console.log(miestuSk); // patikriname 1 budas
console.log("miestu skaicius: ", lietuva.length); // patikriname 2 budas

//  deletina tik masyvo elemento turini, bet ne pati elementa
delete lietuva[0];

console.log(lietuva);

// ikeliame daugiau miestu i pradzia
lietuva.unshift("panevezys");
lietuva.unshift("Kaisiadorys");

console.log(lietuva);

//  idedame miesta i istrinta vieta
lietuva[2] = "kazlu ruda";
console.log(lietuva);

// slice nukopijuoja dali ar viso masyvo ()

var kopija = lietuva.slice(1, 3); // nusikopojuoja dali/visa masyva (nuo, iki).

console.log("kopija 1,3", kopija); // padare masyvo kopija nuo 1 indexso iki 3. 3 neieina.
console.log("originalas", lietuva);

var kopija2 = lietuva.slice(1, -1); // su minusu tai nukopina nuo galo, viena neitraukdama ( - 1 reiksia vieno nuo galo neitrauksime.)

console.log("kopija2", kopija2);


// iterpimas i viduri 

lietuva.splice(2, 0, "jonava", "plunge"); // nuo 2; "0" - 0 istriname, iterpiame 2 elementus

console.log("iterpeme vidury:", lietuva); // tikrinimas

//  TRINIMAS

lietuva.splice(5, 1); // nuo 5 elemento, istriname 1 slaciu

console.log(lietuva); // tikriname

// PAKEITIMAS

lietuva.splice(1, 2, "KAUNAS", "TAURAGES RAJ. LAUKSARGIAI"); // NUO PIRMO: istrinti 2 elementus ir iterpti du elementus;

console.log(lietuva);


// =======================================
//   UZDA                  ===============
//       VI                 ================
//         NIAI                ==================

// SAVARANKISKA UZDUOTIS  Array

keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
// 3. istrinti 3-cia elmenta.
delete keliautojas[2];

console.log(keliautojas); // PATIKRINIMAS



// --------GERESNI UZDAVINIAI: 
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// sukuriam tuscia masyva
var masyvas = [];


for (var i = 0; i < 50; i++) { // nurodome, kad masyvas turi tureti 50 elemntu
  masyvas[i] = 0; // nurodome, kad masyve butu vien nuliai

}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var masyvas2 = [];
var i = 0;

while (i < 50) {
  masyvas2[i] = 1;
  i++;
}
console.log(masyvas2);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// VIENAS BUDAS
// for (var i = 1; i < 50; i += 2) {
//   masyvas[i] = 3;

//   // if (masyvas[i] == 1) {
//   //   i++;
//   // } else if (i == 2) {
//   //   i++;
//   // }

// }
// console.log(masyvas);

// ANTRAS BUDAS
// for (var i = 0; i < 50; i++) {
//   i++;
//   masyvas[i] = 3;
// }
// console.log(masyvas);

// TRECIAS BUDAS su modulio dalyba

// for (var i = 0; i < masyvas.length; i++) {
//   // tikrinu ar stalcius yra lyginis
//   if (i % 2 === 0) {
//     masyvas[i] = 3;
//   }

// }
// console.log(" su moduliu:", masyvas);


// console.log(masyvas);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

var hardMasyvas = [];

for (var i = 0; i < 50; i++) {
  hardMasyvas[i] = 1;
  hardMasyvas[i + 1] = 3;
  hardMasyvas[i + 2] = 1;
  hardMasyvas[i + 3] = 3;
  hardMasyvas[i + 4] = 9;
}