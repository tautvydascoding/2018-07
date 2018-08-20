<?php

echo "globalus masyvas GET:";

print_r( $_GET );

$vard = $_GET['vardas'];
$pavard = $_GET['pavarde'];
$telefon = $_GET['telefonas'];
$text = $_GET['zinute'];

echo "Laba diena " . $vard."<br />". $pavard."<br />". $telefon."<br />". $text;

echo "Sveiki $vard <br />";
printf( "<h3>. $vard, $pavard, </h3>");
