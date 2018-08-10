// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'

// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

var y = {
    vardas: "Petras",
    pavarde: "Saslauskas",
    klase: [8],
    pazymiai: [6, 5, 9, 10, 8],
    begu: function (x) {
        console.warn(x);
    }
};

console.log(y);
y.klase++;
y.pazymiai = [10, 5, 4, 7, 6, 7];
y.begu("bugu begu");
y.miestas = "Kaunas";



// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
    vardas: "Tomas",
    pavarde: "Petrauskas",
    vaikas: {}
};
var vaikas = {
    klase: 4,
    vardas: "Lukas"
};
console.log(tevas);
console.log(vaikas);
tevas.vaikas = vaikas;



// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

function darbuotojas(nr, vardas, pavarde, alga) {
    this.nr = nr;
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.alga = alga;
}

var kazkas = new darbuotojas(45, "Testas", "Testas2", 987);
console.log(kazkas);
//============3=pvz: construktorius =====
// function Car(nr, c, ms) {
//     this.numberOfDoors = nr;
//     this.color = c;
//     this.maxSpeed = ms;
// }
//
// // objekto kurimas
// var AudiTT = new Car(2, "red", 280);
