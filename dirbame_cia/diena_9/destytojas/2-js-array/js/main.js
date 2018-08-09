console.log("Labas");


// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji
    // 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima
    // -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    var atlyginimas = 500;
    var arPasikeite = false;   // dar nepasikeite
    atlyginimas += 100;        // atlyginimas = atlyginimas + 100;
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
// var nr = -9999;
// for (var i = 0; i < names.length; i++) {
//     if(  names[i] === "Rico") {
//         nr = i;
//         break; // nutraukia loop   (tam kad toliau nebeieskoti, nes jau radome)
//     }
// }
// document.querySelector("body").innerHTML +=
//     "<div class='bg-info'>   Rico numeris: " + nr + "</div>";

// -----------ieskome visu Rico------------
// var ieskomasis = "Rico";
// for (var i = 0; i < names.length; i++) {
//
//     if(  names[i] === ieskomasis) {
//         document.querySelector("body").innerHTML +=
//             "<div class='bg-info'>   Rico numeris: " + i + "</div>";
//      }
// }

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
var ieskomasis = "Rico";
var arRadau = false; // neradau dar

for (var i = 0; i < names.length; i++) {
        if(  names[i] === ieskomasis) {
            arRadau = true; // radau
            document.querySelector("body").innerHTML +=
                "<div class='bg-info'>   Rico numeris: " + i + "</div>";
         }
}
if (arRadau == false) {
    document.querySelector("body").innerHTML +=
        "<div class='bg-danger'> NERADAU </div>";
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
// ====ARBA  IF trumpiau====
var tekstas = (arRadau) ? "radau" : "neradau" ;
console.log( tekstas ); 

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
