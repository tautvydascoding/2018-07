<?php



// static pvz:

function augu() {
    $ugis = 50; // local
    echo "Ugis: $ugis <br>";
    $ugis++;
}
 // augu();
 // augu();
 // augu();
 // augu();

 // su static
 function augu22() {
     static $ugis = 50; // static - kintamaiss nebus naikinamas - pabaigus f-jai darba
     echo "Ugis : $ugis <br>";
     $ugis++;
 }
 // augu22();
 // augu22();
 // augu22();
 // augu22();


 // ------rekurcija--f-ja pati save paliedzianti
// uzduotis: atspausdinti 20 kartu "labas" ir salia numeri, kelintas kartas
function testRecursion() {
    static $nr = 0;
    $nr++;
    if( $nr < 20) {
        testRecursion();
    }
    echo "Labas $nr <br />";
}
testRecursion();


//===========
$vardai = ["tomas", "jurgis"];

function spausdinti() {
    getVardas();
    echo " 1. spausdinu varda: ";
}
function getVardas() {
    $x = getVardasIsDB();
    echo " 2. imu varda" . $x;
}
function getVardasIsDB() {
    global $vardai;
    return $vardai[0];
}

spausdinti();

 //
