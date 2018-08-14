<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- resposive design reikalingas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
         <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/normalize.css">
        <!-- !!!! mano CSS failas visas patas zemiausias -->
        <link rel="stylesheet" href="css/master.css?ver=1.0">

        <!-- NOTE: jeigu neveikia:
        1) ar failo pavadinimas geras
        2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
        3) ar   rel="stylesheet"
        4) ar link gale uzdalete ">"
        5) ar tuo adresu nuejai internete (pvz: ar ne praeitos dienos projektas)
    -->
    </head>
    <body>
        <div class="container   ">

            <h1> Isijunk Inspect->console </h1>

<?php

// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
$darbuotojas0 = ["jonas", "jonaitis", 1980, "inspektorius"];

// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
$darbuotojas1 = ["ona", "onute", 1988, "sekretore"];

// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas

$darbuotojas2 = ["kestas", "kerta", 2001, "pavaduotojas"];

// D. sukurti masyva 'visiDarbuotojai'

$visidarbuotojai = [];

// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus

$visidarbuotojai[0] = $darbuotojas0;
$visidarbuotojai[1] = $darbuotojas1;
$visidarbuotojai[2] = $darbuotojas2;

// echo $visidarbuotojai;
// print_r($visidarbuotojai);


// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

// for ($i = 0; $i < count($darbuotojas0); $i++) {
//     $visidarbuotojai[0][$i];
//     echo $visidarbuotojai[0][$i];

//     //  for($a =0; $a < $darbuotojas0; $a++ )

// }
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

// for ($i = 0; $i < count($visidarbuotojai); $i++) {
//     $visidarbuotojai[0][$i];
//     for ($a = 0; $a < count($darbuotojas0); $a++) {
       
//     }
//     echo $visidarbuotojai[$i][0];
// }


// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

// for ($i = 0; $i < count($visidarbuotojai[0]); $i++) {
//     echo "<br>" . $visidarbuotojai[$i][0];
//     echo $visidarbuotojai[$i][1];
//     echo $visidarbuotojai[$i][2];
//     echo $visidarbuotojai[$i][3];

// }

// echo $visidarbuotojai[$i][$i];

// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

// for ($i = 0; $i < count($visidarbuotojai[0]); $i++) {
//     $visidarbuotojai[$i];// nebutinas
//     for ($a = 0; $a < count($visidarbuotojai[0]); $a++) {

//         echo $visidarbuotojai[$i][$a];
//     }
//     echo "<br>"; // atsoauzdina masyva stulpeliu
// }

// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

$visosPrekes = [];

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina

$prake0 = ["antraste1", "imgPav", "prekAprasas", "kaina"];
$prake1 = ["antraste2", "imgPav", "prekAprasas", "kaina"];
$prake2 = ["antraste3", "imgPav", "prekAprasas", "kaina"];


// B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes[0] = $prake0;
$visosPrekes[1] = $prake1;
$visosPrekes[2] = $prake2;
print_r($visosPrekes);

// print_r($visosPrekes);

// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
// for ($i = 0; $i < count($visosPrekes[0]); $i++) {

//     for ($a = 0; $a < count($visosPrekes[0]); $a++) {
//         echo "<div class='row'> ";
//         echo "<div class = 'col-md-5'>";
//         echo $visosPrekes[$i][$a];
//         echo "</div> ";
//         echo "</div> ";

//     }

//     echo "<br>";
// }
echo "<div class='row'> ";
for ($i = 0; $i < count($visosPrekes[0]); $i++) {
    echo "<div class = 'col-md-5'>";
    echo "<h1>";
    echo $visosPrekes[$i][0];
    echo "</h1>";
    echo "<p>";
    echo printf("<img src='kir.jpg' width='200' height='200'");
    echo $visosPrekes[$i][1];
    echo "</p>";
    echo "</p>";
    echo $visosPrekes[$i][2];
    echo "</p>";

    echo "</div> ";
}
echo "</div> ";
// 3 budai nuotraukoms
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

?>

<?php

// ASOCIATIVE ARRAY
$zmogus = [
    'vardas' => "petras",
    'pavarde' => "petrauskas",
    'amzius' => 23,
    "arVedes" => true,

];

print_r($zmogus); // array isvedimas
var_dump($zmogus);// tobulesnis bet ne tiek butinas array isvedimas

foreach ($zmogus as $issigalvotasKintamasisStalciausTurinys) {
    echo "<br>" . $issigalvotasKintamasisStalciausTurinys . "<br>";
}





?>


























        </div> <!--  end Container-->






















                <!--  =================================== -->
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias; visada failo -->
        <!-- <script type="text/javascript" src="js/main.js"></script> --> 

    </body>
</html>
