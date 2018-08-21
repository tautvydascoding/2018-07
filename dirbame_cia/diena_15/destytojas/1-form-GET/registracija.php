<?php

echo "globalus masyvas GET: <BR />";

print_r( $_GET );


$vard = $_GET['vardas'];
$pav = $_GET['pavarde'];
$telefonas = $_GET['tel'];


// UZDUOTIS
// pasisveikinti su katik uzsiregistravusius zmogumi ir
// graziai atspausdinti uzsiregistravusio zmoguas duomenis

echo "<br /><br />  Sveiki $vard <br />";
printf( "<h3>Jusu duomenys: %s, %s. Telefonas: %s </h3>", $vard, $pav, $telefonas );
