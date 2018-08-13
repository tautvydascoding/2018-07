console.log("Labas");
 
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A
var numeris = names.indexOf('Rico');
console.log(numeris);

// 1B
var numeriai = [];
for (i=0; i < names.length; i++) {
    if (names[i] == 'Rico') {
        numeriai.push(i);
    }
}
if (numeriai.length > 0) {
    console.log(numeriai);    
} else {
    console.log('toks vardas nerastas');    
}

// 2
function getStalciausNumeris(masyvas, stalcius) {
    return masyvas.indexOf(stalcius);
}
console.log(getStalciausNumeris(names, 'Wynona'))

// 3
function getPavarde(vardas) {
    position = names.indexOf(vardas);
    return lastNames[position];
}
console.log(getPavarde('Freida'));

// 4
function getPavardes(vardas) {
    var pavardes = [];
    for (i=0; i < names.length; i++) {
        if (names[i] === vardas) {
            pavardes.push(lastNames[i]);
        }
    }
    return pavardes;
}
console.log(getPavardes('Rico'));

// 5
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (i=0; ieskomiZmones.length > i; i++) {
    console.log(ieskomiZmones[i], names[ieskomiZmones[i]], lastNames[ieskomiZmones[i]]);
}