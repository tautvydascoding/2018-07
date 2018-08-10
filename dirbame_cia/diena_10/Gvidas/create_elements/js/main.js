// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

// var manoHeader = document.createElement("header");
// console.log(manoHeader);
//
// // 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)
//
// var manotekstas = "Antraste";
// var elmText = document.createTextNode(manotekstas);
//
// // 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// // test
// // console.log(  manoHeader );
//
// manoHeader.appendChild(elmText);
// console.log(manoHeader);
//
// // 3.1. headerio elementa ideti i <body> elementa
//
// var manoBody = document.createElement("body");
// manoHeader.appendChild(manoBody);
// console.log(manoHeader);

// 3.2 html
        // body
        // header       insertBefore
        // aside
//     headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );

var manoHeader = document.createElement("header");
aside = document.querySelector('aside');
document.body.insertBefore(manoHeader, aside);
