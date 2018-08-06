console.log(" Labas ");


//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina(x) {
    console.log("Kaina:", x);
    // arba
    document.write("Kaina: " + x + "<br>"); // Kaina 999.00 <br>
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
    var x1 = 5;
    var x2= 10;
    var x3 = 8;
    var x4 = 6;
    var x5 = 8;
    console.log("Pazymiu vidurkis:", (x1 + x2 + x3 + x4 +x5) / 5 );
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1, x2, x3, x4, x5) { // nauji issigalvorti, laikini (local) kintamieji
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log( vidurkis );
    // arba
    document.write("vidurkis: " + vidurkis + "<br>");
}
pazymiuVidurkis1(2, 5, 7, 5, 2);
//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    var vardas = "tomas"; // local - laikinas kintamasis
    return vardas;
}
var x = getVardas();
console.log("Mano draugas ", x);

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji:  "pavarde" = Tomauskas ir "vardas" = "Antanas"
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var pavarde = "Tomauskas";
    var vardas = "Antanas";
    var tekstas =  vardas + pavarde;   // "+" sujungia du tekstus/string i viena
    return tekstas;
    console.log("testuoju");   // niekada nesuveiks, nes po "return" f-ja nutraukia darba
}
var y = getVardasPavarde();
console.log( y );    // arba console.log( getVardasPavarde() );

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis() {
     var h1Elementas = document.querySelector('h2'); // ieskome h1
     console.log( h1Elementas ); // testuoju ar radome h1
    var aukstis = h1Elementas.offsetHeight;
    // arba
    //var aukstis = document.querySelector('h1').offsetHeight;
    return aukstis;
}
var x = getH1ElementoAukstis( );
console.log( "aukstis", x );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")


// =================FOR intro  ======================




//==================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================
