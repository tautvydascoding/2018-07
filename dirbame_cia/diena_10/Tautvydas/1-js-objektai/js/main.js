console.log("Labas");
 
// 1
var mokinys = {
    vardas: 'Jurgis',
    pavarde: 'Jurgauskas',
    klase: 7,
    pazymiai: [6, 5, 9, 10, 8]
};

// 1.1
console.log(mokinys.vardas);
console.log(mokinys.pavarde);
console.log(mokinys.klase);
console.log(mokinys.pazymiai.join(' :: '));

// 1.2
mokinys.klase++;
mokinys.pazymiai = [2, 3, 3, 4, 5];
// mokinys.begu() {
//     console.log('begu begu');
// }
mokinys.miestas = 'kaunas';

// 1.3
console.log(mokinys);
console.log(mokinys.begu);

// 2
var vaikas = {
    klase: 7,
    vardas: "C"
};
var tevas = {
    vardas: "A",
    pavarde: "B",
    tevovaikas: vaikas
};
console.log(tevas);

// 3
// var darbuotojas = {
//     nr: 1,
//     vardas: 'aaa',
//     pavarde: 'a1',
//     alga: 600
// }
function darbuotojas(n, v, p, a) {
    this.nr = n;
    this.vardas = v;
    this.pavarde = p;
    this.alga = a;
}
var algelis = new darbuotojas(2, 'Algelis', 'Tas', 450);

console.log(algelis);