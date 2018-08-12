 console.log("Labas222");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console
var paveiksliukas = $('<img/>');
paveiksliukas.attr( {
    "width" : "200px",
    "heigth" : "200px",
    "src" : "./1.jpg"
});
// arba
// var paveiksliukas = $('<img src="#" width="200px" hegth="200px" >');

console.log( paveiksliukas );

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
// sukurimas
var virsus = $('<header></header>');
var apacia = $('<footer></footer>').html(" puslapio apacia");
// teksto idejimas
virsus.html( "Menu");

// idejimas i body
$('body').prepend( virsus );  // preppend - ideda kaip vaika, i virsus
$('body').append( apacia );  // apacia - ideda kaip vaika, i apacia

// ARBA
// $('body').prepend( '<header> Antraste </header>' );

// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header, footer').append(paveiksliukas);

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

$('header img').toggleClass('logo');


// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var manoMain = $('<main></main>').html("Mano tekstas");
$('header').after( manoMain ); // po Header elm. idedame "main" elmt.

// $('header').after( '<main>Mano tekstas</main>' );

// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

var straipsnis = $('<article> </article>');
var manoH2 = $('<h2></h2>').html( 'Antraste' );
var aprasymas = $('<p></p>').html( 'Lorem lorem lorem' );


$('main').append( straipsnis );

// straipsnis.append( manoH2 );
// straipsnis.append( aprasymas );
//ARBA
// $(manoH2).appendTo( 'article' );
// $(aprasymas).appendTo( 'article' );
// ARBA
$( 'article' ).append( manoH2 );
$( 'article' ).append( aprasymas );



// $(straipsnis).append( manoH2 );
// $(straipsnis).append( aprasymas );

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGOTIPA i kita vieta naudojant js
// A) perkelti i footer
// B) perkelti i article ( tarp h2 ir p)

// A
$('.logo').appendTo( 'footer' );
// B
// ka ideti            kur ideti
$('.logo').insertAfter( 'h2' ); // insertBefore

// ---------------------------------
// 1.9 daugiau uzduociu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//









//
