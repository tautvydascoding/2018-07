<?php
define('DB_NAME', 'projektas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

function getPrisijungimas () {
    global $prisijungimas;
    return $prisijungimas;
}


function getPrekes() {
    $manoSQL= "SELECT * FROM visosprekes";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function prekeUpdate($id, $link, $name, $price, $kiekis, $pozicija, $aprasymas) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $link = mysqli_real_escape_string( getPrisijungimas(), $link);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $price = mysqli_real_escape_string( getPrisijungimas(), $price);
    $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $aprasymas = mysqli_real_escape_string( getPrisijungimas(), $aprasymas);
    $manoSQL = "UPDATE visosprekes SET link='$link', name='$name', price='$price', kiekis='$kiekis', pozicija='$pozicija', aprasymas='$aprasymas' WHERE id='$id'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko <br>" . mysqli_error();
    }
}

function deletePreke($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM visosprekes WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}

function createPreke($link, $name, $price, $kiekis, $pozicija, $aprasymas) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $link = mysqli_real_escape_string( getPrisijungimas(), $link);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $price = mysqli_real_escape_string( getPrisijungimas(), $price);
    $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $aprasymas = mysqli_real_escape_string( getPrisijungimas(), $aprasymas);
    $manoSQL = "INSERT INTO visosprekes VALUES (NULL, '$link', '$name', '$price', '$kiekis', '$pozicija', '$aprasymas')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujos prekes<br>";
    }
}

// images
function getImgs() {
    $manoSQL= "SELECT * FROM img";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function createImg($name, $pozicija, $prekesid) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $prekesid = mysqli_real_escape_string( getPrisijungimas(), $prekesid);
    $manoSQL = "INSERT INTO img VALUES (NULL, '$name', '$pozicija', '$prekesid')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujos prekes<br>";
    }
}

function imgUpdate($id, $name, $pozicija, $prekesid) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $prekesid = mysqli_real_escape_string( getPrisijungimas(), $prekesid);
    $manoSQL = "UPDATE img SET name='$name', pozicija='$pozicija', prekesid='$prekesid' WHERE id='$id'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko <br>" . mysqli_error();
    }
}

function deleteImg($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM img WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}

// Uzsakymai
function getUzsakymai() {
    $manoSQL= "SELECT * FROM uzsakymai";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
function uzsakymasUpdate($id, $name, $lname, $email, $address, $postalcode, $phone, $comments, $prekesid, $patvirtinta) {
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
    $manoSQL = "UPDATE uzsakymai SET name='$name', lname='$lname', email='$email', address='$address', postalcode='$postalcode', phone='$phone', comments='$comments', prekesid='$prekesid', patvirtinta='$patvirtinta' WHERE id='$id'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko <br>" . mysqli_error();
    }
}

function deleteUzsakymas($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM uzsakymai WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}
// Klausimai
function getKlausimai() {
    $manoSQL= "SELECT * FROM pranesimai";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function deleteKlausimas($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM pranesimai WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}
