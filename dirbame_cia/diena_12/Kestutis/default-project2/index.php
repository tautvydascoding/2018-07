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

          <!-- // =================svarbus patarimai===================:
          // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
          // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
          // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
          // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
          // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
          // matricos ilgis daznai skiriasi nuo plocio.
          //  pvz.:
           // for ( i < eiluciuSkaicius)
           //    for ( k < stulpeliuSkaicius)
           // =================// =================// ========
 -->

<!--
               // UZDUOTIS 1.0
               // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
               // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
               // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
               // D. sukurti masyva 'visiDarbuotojai'
               // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
               // UZDUOTIS 1.1
               // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
               // UZDUOTIS 1.2
               // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
               // UZDUOTIS 1.3
               // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
               // UZDUOTIS 1.4
               // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus) -->
               <br>
               <br>
<?php

$darbuotojas1 = [ "Jonas", "Jonaitis", 1980, "Inspektorius" ];
$darbuotojas2 = [ "Ona", "Onute", 1980, "sekretore" ];
$darbuotojas3 = [ "Kestas", "Kerta", 2001, "pavaduotojas"];
$visiDarbuotojai = [];

$visiDarbuotojai = [ $darbuotojas1, $darbuotojas2, $darbuotojas3 ];

 // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

 for ($i=0; $i < 4 ; $i++) {
   $kintamasis = $darbuotojas1[$i];
   echo $kintamasis;
 }
?>
<br>
<?php
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

for ($i=0; $i < 3 ; $i++) {
  $visiDuomenis = $visiDarbuotojai[$i][0];
  echo $visiDuomenis;
}

 ?>
 <br>
 <?php
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

for ($x=0; $x < 3 ; $x++) {

    echo $visiDarbuotojai[$x][0];
    echo $visiDarbuotojai[$x][1];
    echo $visiDarbuotojai[$x][2];
    echo $visiDarbuotojai[$x][3];
}
?>
<br>
<?php
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus) -->
for ($x=0; $x <3 ; $x++) {
  for ($y=0; $y <4 ; $y++) {
    echo $visiDarbuotojai[$x][$y];
  }
}


// UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
 ?>
<br>
<h4>Antra uzduotis</h4>
<br>
<?php

$preke = ["Antraste", "studente.jpg", "kompiuteris", 5];
$preke1 = ["Antraste1", "studente.jpg", "kompiuteris1", 6];
$preke2 = ["Antraste2", "studente.jpg", "prekes aprasymas2", 7];
$visosPrekes = [$preke, $preke1, $preke2];

for ($i=0; $i <3 ; $i++) {
   for ($x=0; $x <4 ; $x++) {
      printf("<br>" . $visosPrekes[$i][$x] );
   }

}
 ?>
<br>
<h4>Antra uzduotis kitu budu</h4>
<?php
$arrlength = count($visosPrekes);
printf ("<div class='row'>");
for ($i=0; $i < $arrlength ; $i++) {

    printf ("<div class='col alert-primary'>");
    printf( $visosPrekes[$i][0] ."<br>");
    printf("<img src='". $visosPrekes[$i][1] ."' width='200px;' alt='studentes nuotrauka'/><br>");
    printf( $visosPrekes[$i][2] ."<br>" );
    printf("kaina" . $visosPrekes[$i][3] ."$" );
    printf ("</div>");

}
printf ("</div>");
?>
<br>


        </div> <!--  end Container-->









                <!--  =================================== -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias; visada failo -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
