<?php
// print_r($_GET);

$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$telefonas = $_GET['telefonas'];

// echo "$vardas $pavarde tel nr.: $telefonas";

$vardasKreipinys = $vardas;
if (substr($vardas, -2) == 'as') {
    $vardasKreipinys = substr($vardas, 0, -2);
    $vardasKreipinys = $vardasKreipinys . 'ai';
} elseif (substr($vardas, -2) == 'is') {
    $vardasKreipinys = substr($vardas, 0, -2);
    $vardasKreipinys = $vardasKreipinys . 'i';
} elseif (substr($vardas, -2) == 'us') {
    $vardasKreipinys = substr($vardas, 0, -2);
    $vardasKreipinys = $vardasKreipinys . 'au';
}

echo "Sveiki, $vardasKreipinys!";