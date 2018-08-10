console.log("Labas");


//-------- CSS KEITIMAS=========

// su javascriptu
// document.querySelector('p').style.backgroundColor = "blue";

// su jquery

//$ === document.querySelectorALL
// $('p:first').css("background-color", "red");

// js objektas
// var manoCSS = {
//   "color": "red",
//   "font-size": "2.5rem",
//   "border": "solid 1px yellow",
//   "margin": "2.2rem",
//   "padding": "2.2rem"

// };
// objekto nurodymas jqueriui. Kad vykdytu objekto nurodymus, jis turi buti be klaidu
// $('h2').css(manoCSS);


// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$('h1, h2').css("color", "blue");
// A2) kas antra h2 pakeisti i raudona
$('h2:even').css("color", "red");
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$('li:last').css("color", "green");
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}


$('li:not(.reklama)').css("color", "yellow");