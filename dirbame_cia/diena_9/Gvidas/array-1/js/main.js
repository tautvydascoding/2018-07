console.log("labas");

// =================taisyklingas Array copy  =================
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// ================= ========= ======== ========


// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
    var atlyginimas = 500;
    var arPasikeite = false;
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji
    // 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima
    // -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
    if ( atlyginimas > 500) {
            console.log(" atlyginimas pasikeite");
    } else {
           console.log("  atlyginimas toks pats ");
    }
    // suprogramuoti patikrinima (su if), kad isvestu zinute
    if ( atlyginimas > 500) {
        arPasikeite = true;
    }
    // ar cia tiesa??
    if ( arPasikeite ) {
            console.log(" atlyginimas pasikeite");
    } else {
           console.log("  atlyginimas toks pats ");
    }



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// vieno Rico radimas
var nr = -99;
for (var i = 0; i < names.length; i++) {
    if (names[i] === "Rico") {
        nr = i;
        break; // break - nutraukia dabartini cikla/loop
    }
}
document.querySelector('body').innerHTML += "<div>" + nr + "</div>";

// ieskome visu Riku
// var ieskomasis = "Rico";
// for (var i = 0; i < names.length; i++) {
//     if (names[i] === ieskomasis) {
//         document.querySelector('body').innerHTML += "<div>Rico yra: " + i + "</div>";
//     }
// }


// pabaigti namuose
// var neradom = false;
// var ieskomasis = "Rico";
// for (var i = 0; i < names.length; i++) {
//     if (names[i] === ieskomasis) {
//         document.querySelector('body').innerHTML += "<div>Rico yra: " + i + "</div>";
//     } else {
//         neradom = true;
//     }
// }
// if (neradom == true) {
//     document.querySelector('body').innerHTML += "<div>Nera</div>";
// }



// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(ieskomasTekstas) {
    var ieskomasis = ieskomasTekstas;
    for (var i = 0; i < names.length; i++) {
        if (names[i] === ieskomasis) {
            document.querySelector('body').innerHTML += "<div>"+ ieskomasTekstas + " yra: " + i + " elemente</div>";
        }
    }
}
getStalciausNumeris("Piper");

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

var ieskomasis2 = names.indexOf("Freida");
console.warn("Freida pavarde yra: ", lastNames[ieskomasis2]);

// 4) rasti visu zmoniu vardu "Rico" pavardes

var ieskomasis3 = "Rico";
for (var i = 0; i < names.length; i++) {
    if (names[i] === ieskomasis3) {
        document.querySelector('body').innerHTML +=  lastNames[i] + " ";
    }
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// A
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
document.querySelector('body').innerHTML += "<div>Sarasas zmoniu: " + ieskomiZmones + "</div>";

// B
function vp(x) {
    document.querySelector('body').innerHTML += "<div><strong>Ieskomo zmogaus vardo numeris:"+ [x] + " ir jo vardas yra " + names[x] + "</strong></div>";
    document.querySelector('body').innerHTML += "<div><i>Ieskomo zmogaus pavardes numeris:" + [x] + " ir jo pavarde yra " + lastNames[x] + "</i></div>";
}
for (var i = 0; i < ieskomiZmones.length; i++) {
    vp(ieskomiZmones[i]);
}



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
