console.log("Labas");

// 1.1
function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
  return (x1+x2+x3+x4+x5)/5;
}
console.log(pazymiuVidurkis1(5, 10 , 8 , 6 , 8));

// 2
function getVardas(vardas) {
  return vardas;
}
console.log(getVardas('Tomas'));

function getH1ElementoAukstis() {
  return document.querySelector('h1').clientHeight;
}
console.log(getH1ElementoAukstis());
