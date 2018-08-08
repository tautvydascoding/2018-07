// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti masinos duomenu masyva: pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
// sunkesne:
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========


var duomenys = [];
duomenys[0] = "bmw";
duomenys[1] = 5465120;
duomenys[2] = 100005;

// padidino kaina 100
duomenys[1] += 100;

// sumazino rida -50000
duomenys[2] += -50000;

// idejau papildoma masyva "Tomas"
duomenys[3] = "Tomas";

// papildomas masyvas "2004"
duomenys[4] = 2004;



document.querySelector('h1').innerHTML += duomenys;
document.querySelector('body').innerHTML += "<article></article>"
document.querySelector('article').innerHTML += "<h2>" + duomenys[0] + "</h2>"
document.querySelector('article').innerHTML += "<div>Savininko vardas: " + duomenys[3] + "</div>";
document.querySelector('article').innerHTML += "<span>Masinos metai: " + duomenys[4] + " Rida: " + duomenys[2] + "</span>";
document.querySelector('article').innerHTML += "<div>Masinos kaina:<button type='button'>" +  duomenys[1] + "</button></div>"
