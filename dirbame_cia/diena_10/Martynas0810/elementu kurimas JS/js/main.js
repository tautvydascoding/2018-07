console.log("Labas");

// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

var manoAside = document.createElement("aside");
console.log(manoAside);
// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
var manoHeader = document.createElement("header");
console.log(manoHeader);

// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test


// 1. sukurti "header"  DOM objekta/NODE'a document.createElement
// test
// console.log(  manoHeader );

// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node :
// panaudojant js document.createTextNode(xxx)


// 3.1 i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );

// 3.2 html
// body
// header       insertBefore
// aside
// 4. headeri idesime po H1
//        tetis                kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );





















// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa

// 3.2. headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );


//