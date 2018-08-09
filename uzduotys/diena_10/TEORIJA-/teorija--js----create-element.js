

// <aside>  elemento objekto (Node) kurimas
var elmAside = document.createElement("aside");

console.log(elmAside);

// paprasto teksto rasymas
var elmText = document.createTextNode("lorem lorem lorem");
// or
//elmAside.innerHTML += "lorem lorem lorem2";

console.log(elmText);

// elemento idejimas i kita elementa
elmAside.appendChild(elmText);
//console.log(elmAside);

// ! sukurti elementai - buna dar neideti i window  document html puslapi

//=============
//  objekto (Node) idejimas i HTML
var elmH1 =  document.querySelector("h1");
//                         kaIdeti  PriesKa
document.body.insertBefore(elmAside, elmH1);
// document.body.appendChild(elmAside);
//==============
