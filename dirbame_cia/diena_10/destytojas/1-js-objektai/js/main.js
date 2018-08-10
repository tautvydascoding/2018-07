console.log("Labas");

// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

var mokinys = {
    vardas : "Tomas",
    pavarde : "Tomulis",
    kelintokas : 7,
    pazymiai : [9, 9, 8, 8, 10],
    begu: function () {
        console.log("begu begu");
    }
};


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log(  "vardas yra: ",  mokinys.vardas);
console.log(  "pavarde yra: ", mokinys.pavarde);
console.log(  "klase yra: ",   mokinys.kelintokas);
console.log(  "pazymiai yra: ", mokinys.pazymiai.join(" :: ") );
console.log(  "pazymiai yra: ", mokinys.pazymiai.toString() );
// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
mokinys.kelintokas++;
// jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla"
if (  mokinys.kelintokas >= 13  ) {
    document.querySelector('h1').innerHTML += "mokinys pabaige mokykla";
}

// pakeisti: visus 6 pazymius
mokinys.pazymiai = [9, 9, 8, 8, 10];
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
mokinys.begu();
mokinys.begu();
mokinys.begu();
// prideti nauja kintamaji: miestas = 'kaunas'
mokinys.miestas = "Kaunas";  // nepatartinas naudoti - pavojingas del
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas, pavarde, vaikas
// B) vaikas: klase, vardas
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas objekui (kintamajam)
var tetis = {
    name: "Petras",
    lname: "Petrauskas",
    vaikas: {}
};
var vaikas = {
    name: "Juozas",
    klase: 5
};
console.log( "aaa",  tetis );
console.log(  vaikas );

tetis.vaikas = vaikas;
console.log(  tetis );
console.log(  vaikas );

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
function Car(dSkaicius=0, spalva="nenustatyta", greitis) {
    this.numberOfDoors = dSkaicius;
    this.color = spalva;
    this.maxSpeed = greitis;
}


// objekto kurimas
var AudiTT  = new Car(2, "red", 280);
var Audi100 = new Car(5, "black", 200);
var Audi90 = new Car( -9999, "black", 220);
