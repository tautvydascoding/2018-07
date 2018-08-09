console.log("Labas");

// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

var prekiautojai = []; // tuscias masyvas

prekiautojai[0] = "AB senukai";
prekiautojai[1] = "Ermitazas";
prekiautojai[2] = "Moki vezi";
prekiautojai[3] = "Vamsdziai ir KO";
prekiautojai[50] = "Tomas ir Tomauskai";

// ISVEDIMAS
// console.log(    prekiautojai[0]     );
// console.log(    prekiautojai[1]     );
// console.log(    prekiautojai[2]     );
// console.log(    prekiautojai[3]     );
// ARBA
for (var i = 0;    i < prekiautojai.length;    i++) {
    console.log(     prekiautojai[i]   );
}
//
console.warn("ispejimas");
console.error("raudonas tekstas");
//
