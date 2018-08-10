console.log("Labas");



// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

var manoHeader = document.createElement('header');
console.log(  manoHeader ); // test
var manoTekstas = document.createTextNode("Gallery");
console.log(  manoTekstas ); // test

//idejimas i DOM (ekrana)
document.querySelector('body').appendChild( manoHeader );
// teksto idejomas i Headeri
manoHeader.appendChild( manoTekstas );

var manoAside = document.querySelector('aside');
document.body.insertBefore(  manoHeader, manoAside ); // nevaikia!! nes nurodytas tetis, yra ne aside'o (reik rasti aside teti)

//           tetis(pries ka dedame)                ka idedam   pries ka
document.querySelector('.container').insertBefore(  manoHeader, manoAside );

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa

// 3.2 html
        // body
        // header       insertBefore
        // aside
//     headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
