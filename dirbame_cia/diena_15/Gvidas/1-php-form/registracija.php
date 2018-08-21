<?php
echo "Globalus masyvas GET: <br>";
// print_r($_GET);

$vard = $_GET['vardas'];
$pavr = $_GET['pavarde'];
$telf = $_GET['telefonas'];

echo "<h3>Labas: $vard $pavr</h3>";
echo "<h3>Jusu telefonas: $telf</h3>";
