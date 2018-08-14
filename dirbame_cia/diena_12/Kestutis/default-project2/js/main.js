console.log("Labas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console

var nuotrauka = $("<img src='studente.jpg' width='200px;' hight='200px;' alt='studentes nuotrauka'>");
console.log( nuotrauka );

1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

var elementai = $("<header> <footer> </header> </footer>");
$( "body" ).append( $( elementai ) );

// 1.2
// i <header> ir <footer> ideti <img> elementa

$("body header").append(nuotrauka);
