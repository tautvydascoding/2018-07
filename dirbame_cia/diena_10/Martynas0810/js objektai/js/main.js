console.log("Labas");

// PRISIMINTI TEORIJA
var vardas = ""; // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined

//===========================================
console.log("//======= 1 UZDUOTIS: MOKINIO OBJEKTAS===============")
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

var mokinioObjektas = {
  vardas: "Martynas",
  pavarde: "Martiniauskas",
  klase: 12,
  matPazymiai: [6, 5, 9, 10, 8],
  begu: function () {
    var i = "martynas bega";
    return i
  },

};

// atspauzdinti visus duomenis
console.log(mokinioObjektas);
// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia

if (mokinioObjektas.klase >= 13) {
  console.log("Jis baige mokykla, keliauja i studijas")
}

console.log(mokinioObjektas.klase);
mokinioObjektas.klase = "1 kurso studentas";
// jei butu 10tokas, tai butu buve geriau :
// mokinioObjektas.klase++  // ir butu buves 11tokas

// pakeisti: visus 6 pazymius ( priskiriu naujai)
mokinioObjektas.matPazymiai = [7, 7, 4, 10, 10, 5];

console.log(mokinioObjektas.matPazymiai);
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
console.log(mokinioObjektas.begu());

// prideti nauja kintamaji: miestas = 'kaunas'
mokinioObjektas.miestas = "Kaunas"; // TAIP DARYTI GERIAU NEREIKIA
console.log(mokinioObjektas);

// UZDUOTIS 1.3
// isvesti pakeistus duomenis
console.log(mokinioObjektas.miestas, mokinioObjektas.matPazymiai, mokinioObjektas.klase, );
// paleisti f-ja "begu()"

// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
  vardas: " Benediktas",
  pavarde: "Benediktauskas",
  vaikas: {}
};

console.log(tevas);

var vaikas = {
  klase: 9,
  vardas: "Tomas"
};

tevas.vaikas = vaikas;
console.log(tevas.vaikas);

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
console.log("====== KONSTRUKTORIAUS SUKURIMAS=======")

function darbuotojas(nr, vardas, pavarde, alga) { // SUKURIAM konstruktoriu, su parametrais
  this.nr = nr; // this numeris nurodo numeri, kuri ives asmuo
  this.vardas = vardas; // this vardas nurodo varda, kuri ives asmuo, ir kuris priklausys tam vartotojui.
  this.pavarde = pavarde; // this pavarde nurodo varda, kuri ives asmuo
  this.alga = alga; // this alga nurodo varda, kuri ives asmuo
}

// IS DIDZIOSIOS RAIDES, ATSPINDI OBJEKTA. GALIMA KURTI SU DIDZIAJA RAIDE
var TomasTomauskas = new darbuotojas(1001, "Tomas", "Tomauskas", 600);
var DarbuotojasNr2 = new darbuotojas(1002, "Martynas", "Martynauskas", 500);

var DarbuotojasNr3 = new darbuotojas();

console.log(TomasTomauskas, DarbuotojasNr2, DarbuotojasNr3);


//============3=pvz: construktorius =====
// function Car(nr, c, ms) {
//     this.numberOfDoors = nr;
//     this.color = c;
//     this.maxSpeed = ms;
// }
//
// // objekto kurimas
// var AudiTT = new Car(2, "red", 280);