console.log("Labas");
 
var manoAside = document.createElement('aside');
document.querySelector('.container').appendChild(manoAside);
manoAside.appendChild(document.createTextNode("universalas sidabrinis katik no tralo"));
// document.body.insertAfter(document.querySelector('h1'), manoAside);
var manoHeader = document.createElement('header');
console.log(manoHeader);
var manotekstas = document.createTextNode("VW Passat 1.9 TDI 66kW 1996");
manoHeader.appendChild(manotekstas);
document.querySelector('.container').insertBefore(manoHeader, manoAside);
