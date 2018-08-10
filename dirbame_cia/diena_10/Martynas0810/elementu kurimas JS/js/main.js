// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

var manoAside = document.createElement("aside");
console.log(manoAside); // veikia
// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
var manoHeader = document.createElement("header");
// console.log(manoHeader); // veikia
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

var manoTekstas = document.createTextNode("Cia sukurtas tekstas su JavaScriptu");

// 2. i susikurta 'header' elemneta  ideti 'tekstas' elementas (Node)
manoHeader.appendChild(manoTekstas);
// test
console.log(manoHeader);
// console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa
document.querySelector("body").appendChild(manoHeader);
console.log()

document.querySelector("body").appendChild(manoAside);
console.log(manoAside);

var manoDiv = document.querySelector("div"); // turim diva, todel ji reikia priskirti kintamajam. ji surandam ir priskiriam

// arba
// document.querySelector('container').insertBefore(manoHeader,manoAside);

var manoH1 = document.querySelector("h1");
// 3.2 html
// body
// header       insertBefore
// aside
//!!! BUTINAI TEVAS  
//      manoDiv tetis        ka Ideti   PriesKa
document.body.insertBefore(manoHeader, manoDiv);
document.body.insertBefore(manoAside, manoDiv);
//     headerio elementa ideti virs <aside> elementu

// document.manoDiv.insertBefore(manoHeader, manoH1);

// SURANDANT IESKOMA ELEMENTA SU "querySelector" reikia elgtis kaip su css, ty jei ieskome klases, nurodome - .container. Jei ID - #aijdy.
document.querySelector('.container').insertBefore(manoHeader, manoH1);

//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );