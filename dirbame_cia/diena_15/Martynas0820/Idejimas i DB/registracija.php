<?php

echo "globalus masyvas GET: <br/>";
print_r($_GET);


$vard = $_GET['vardas'];
$pav = $_GET['pavarde'];
$tel = $_GET['telefonas'];

// pasisveikinti ir atspausdinti duomenis


echo "<h2>" . $vard . "Sveikiname uzsireginus" . "</h2>";

echo "<h3>" . "Jusu duomenys yra:" . $vard . $pav . $tel . "</h3>";

//ARBA SU PRINTF
// printf("<h2> Jusu duomenys: %s, %s. Telefonas: %s </h2>", $vard . $pav . $tel);




