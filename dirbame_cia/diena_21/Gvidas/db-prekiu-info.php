<?php
$rodytiZinutes = true;
// konstantos
define('DB_NAME', 'projektas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
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
function getPreke($nr) {
    $manoSQL = "SELECT * FROM visosprekes WHERE id=$nr";
    // gryzta objektas, ne masyvas
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    // is $rezultatai objekto paiimam duomenis i Array(Masyva)
    $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);
// print_r($rezultataiMasyvas);
    return $rezultataiMasyvas;
}
function getImg($nr) {
    $manoSQL1 = "SELECT img.name FROM visosprekes INNER JOIN img ON img.prekesid = visosprekes.id WHERE img.prekesid=$nr";
    $rezultatai1 = mysqli_query( getPrisijungimas(), $manoSQL1);
    $rezultataiMasyvas1 = mysqli_fetch_assoc($rezultatai1);
    // print_r($rezultataiMasyvas1);
    return $rezultataiMasyvas1;
}

function getPrekes() {
    $manoSQL= "SELECT * FROM visosprekes";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
function getImgs() {
    $manoSQL= "SELECT * FROM img";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
function getImgs1($nr) {
    $manoSQL1 = "SELECT img.name FROM visosprekes INNER JOIN img ON img.prekesid = visosprekes.id WHERE img.prekesid=$nr";
    $rezultatai1 = mysqli_query( getPrisijungimas(), $manoSQL1);
    return $rezultatai1;
}
// Apmokejimas
function createApmokejimas($id, $name, $lname, $email, $address, $postalcode, $phone, $comments, $prekesid, $patvirtinta) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $lname = mysqli_real_escape_string( getPrisijungimas(), $lname);
    $email = mysqli_real_escape_string( getPrisijungimas(), $email);
    $address = mysqli_real_escape_string( getPrisijungimas(), $address);
    $postalcode = mysqli_real_escape_string( getPrisijungimas(), $postalcode);
    $phone = mysqli_real_escape_string( getPrisijungimas(), $phone);
    $comments = mysqli_real_escape_string( getPrisijungimas(), $comments);
    $prekesid = mysqli_real_escape_string( getPrisijungimas(), $prekesid);
    $patvirtinta = mysqli_real_escape_string( getPrisijungimas(), $patvirtinta);
    $manoSQL = "INSERT INTO uzsakymai VALUES (NULL, '$name', '$lname', '$email', '$address', '$postalcode', '$phone', '$comments', '$prekesid', '$patvirtinta')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujo uzsakymo";
    }
}
// gauti informacija apie mokejima
function getApmokejimasID() {
    $manoSQL= "SELECT * FROM uzsakymai";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function lastUzaskymas() {
    $manoSQL = "SELECT * FROM uzsakymai ORDER BY id DESC LIMIT 1";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultataiMasyvas;
}
// Pranesimas
function createKlausimas($vardas, $tema, $email, $pranesimas) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $tema = mysqli_real_escape_string( getPrisijungimas(), $tema);
    $email = mysqli_real_escape_string( getPrisijungimas(), $email);
    $pranesimas = mysqli_real_escape_string( getPrisijungimas(), $pranesimas);
    $manoSQL = "INSERT INTO pranesimai VALUES (NULL, '$vardas', '$tema', '$email', '$pranesimas')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti pranesimo<br>";
    }
}
