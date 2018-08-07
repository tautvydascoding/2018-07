//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (i=0 ; i<50 ; i++) {
    console.log("Azuolas");
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

document.querySelector('h3').innerHTML += "Azuolas";

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

for (i=0 ; i<50; i++) {
    document.querySelector('article').innerHTML += "<h2> Azuolas</h2>";
}

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(xx) {
    document.querySelector('h2').innerHTML += xx;
}
printX("Grazus tekstas");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (i=0 ; i < 100 ; i++) {
    printX("<br>grazus tekstas");
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

for (i=0; i < 12; i++) {
    document.querySelector('div').innerHTML += "<img src='image/100x100.jpg' width='100' height='100'>";
}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function piestiEilute(x) {
    var y = "-";
    for (var i = 0; i < x; i++) {
        document.querySelector('header').innerHTML += y;
    }
}
piestiEilute(30);

document.querySelector('header').innerHTML += "<p> vardas |  pavarde | amzius</p>"

function piestiEilute(x) {
    var y = "-";
    for (var i = 0; i < x; i++) {
        document.querySelector('header').innerHTML += y;
    }
}
piestiEilute(30);

function spausdintiStulpeli(x) {
    // var stul = "/";
    for (var i = 0; i < x; i++) {
        document.querySelector('nav').innerHTML += "| <br>";
    }
}
spausdintiStulpeli(5);

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
