console.log("Labas");



// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
document.querySelector('h1').innerHTML = " <b>Antraste</b>";

var elmentai = document.querySelectorAll('h1');
console.log( elmentai );


var manoH3 = document.querySelector('h3');
console.log(  "h3 yra",  manoH3 );

//----Elemento duomenys--------
// auksto paemimas:
var aukstis1 = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis2 = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
console.log(aukstis1, aukstis2);
// aukscio nustatymas:
document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
