console.log("Labas kaaaaaaaa");

//  visur naudoti tik jQuery!!!!!!


// .html kodas:


// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)


var antraste1 = "cia pirma antraste";
$('h1').eq(0).text(antraste1);
var antraste2 = "cia antra antraste";
$('h1').eq(1).text(antraste2);
var antraste3 = "cia trecia antraste";
$('h1').eq(2).text(antraste3);

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

var sectionH2 = "pakeista antraste";

$("section h2").text(sectionH2);

// UZDUOTIS 3
// paimti ir i console atspausdinti "li" elemento teksta, bet tik to "li" kuris turi klase "reklama"

var liSuReklama = $("ul .reklama");

console.log(liSuReklama);

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

var liTekstas = $("li").text();

console.log(liTekstas);

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzdeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'