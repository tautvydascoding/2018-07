<?php

// uzduotis :
// A: prisijungti pr db
// B: sukurti funkcija kuri paima visa informacija apie gydytoja
// C: panaudoti funkcija ir atvaizduoti visus gydytojus

$rodytiZinutes = true;
// konstantos
define('DB_NAME', 'hospital7');
define('DB_USER', 'gvidas');
define('DB_PASSWORD', 'gvidas2001');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($prisijungimas && $rodytiZinutes) {
    // echo "Prisjungem prie duomenu bazes: " . DB_NAME . " sekmingai";
} elseif ($rodytiZinutes) {
    echo "Nepavyko prisijungti prie duomenu bazes: " . mysqli_connect_error();
}
function getPrisijungimas () {
    global $prisijungimas;
    return $prisijungimas;
}



// paprastas
function getDoctor($nr) {
    $manoSQL = "SELECT * FROM doctors WHERE id=$nr";
    // gryzta objektas, ne masyvas
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    // is $rezultatai objekto paiimam duomenis i Array(Masyva)
    $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);


    return $rezultataiMasyvas;
}

// su error
// function getDoctor($nr) {
//     $manoSQL = "SELECT * FROM doctors WHERE id=$nr";
//     // gryzta objektas, ne masyvas
//     $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
//
//     // jei db radome
//     if (mysqli_num_rows($rezultatai) > 0) {
//         $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);
//         return $rezultatai;
//     } else {
//         echo "ERROR: tokio gydytojo: " . $nr . " neradoma <br>";
//     }
//
// }

// tetinis
// $gydytojas1 = getDoctor(2);
// print_r($gydytojas1);
