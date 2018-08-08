console.log(" Labas ");


var ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];





// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var x = names.indexOf("Rico");  // indexOf - suranga stalciaus numeri
console.log( "numeris " +  x );
// arba
for (var i = 0; i < names.length; i++) {  // names.legnth - grazinau masyvo ilgi
     if ( names[i] == "Rico" ) { // i = 0, 1, 2, 3, 4 .....iki length
        console.log("Radau. Jo stalcius " + i);
     }
}


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

var arRadau = 0; // false  "neradau"
for (var i = 0; i < names.length; i++) {  // names.legnth - grazinau masyvo ilgi
     if ( names[i] == "Rico" ) { // i = 0, 1, 2, 3, 4 .....iki length
        arRadau = 1;
        console.log("Radau. Jo stalcius " + i);
     }
}
// tikriname ar radome
if (arRadau === 0  ) {
    console.log("NEPAVYKO RASTI");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris ( ieskomasTekstas ) { //  ieskomasTekstas - local
    // var numeris = names.indexOf(ieskomasTekstas);
    // return numeris;
    // arba
    for (var i = 0; i < names.length; i++) {
        // console.log( ieskomasTekstas);  // pasitikrintti ar is vis veikia
        // console.log( names[i] );       // pasitikrintti ar is vis veikia

        // console.log("ieskau");
        if( ieskomasTekstas == names[i]) {
            console.log("radau");
            return  i;
        }
    }
}

var nr = getStalciausNumeris("Rico");
console.log( "ieskomo numeris"  + nr );
nr = getStalciausNumeris("Jonas");
console.log( "ieskomo numeris"  + nr );   // kai neranda, grazinamas "-1"

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var vardoNumeris = getStalciausNumeris("Freida");
var pavarde = lastNames[vardoNumeris];
console.log(pavarde);
// ARBA
var ilgis = names.length; // gauname masyvo ilgi
for (var i = 0; i < ilgis; i++) {
    var vardas = names[i];
     if (  vardas  == "Freida" )  {
         var pavarde = lastNames[i];
         break; // break - zodis nutraukia VIENĄ FOR ciklo darba
     }
}
console.log("pavarde: " + pavarde );


// 4) rasti visu zmoniu vardu "Rico" pavardes

// einu per visa vardu masyva
for (var i = 0; i < names.length; i++) {
    // ar i-tasis vardas yra "Rico"
    if (names[i] == "Rico") {
        var pavarde = lastNames[i];
        console.log("Rico pavarde yra " + pavarde );
    }
}

// 5) Turime masyva su zmoniu nr. var  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {
    var ieskomasNumeris = ieskomiZmones[i];
    var vardas = names[ieskomasNumeris];
    var pavarde = lastNames[ieskomasNumeris];
    console.log( " Ieskotas zmogus " + vardas + " " + pavarde );
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
