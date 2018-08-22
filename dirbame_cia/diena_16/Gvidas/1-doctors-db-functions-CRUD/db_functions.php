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


// create doctor paprastas
// function createDoctor($vardas, $pavarde) {
//     $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde')";
//     mysqli_query( getPrisijungimas(), $manoSQL);
// }
// create doctor Saugesnis
function createDoctor($vardas, $pavarde) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);
    $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujo gydytojo: $vardas, $pavarde <br>";
    }
}
// createDoctor("Onute", "Cerniauskaite");
// createDoctor("Povilas", "Povilaitis");
// createDoctor("Antanas", "Kalauskas");


// funkcija is Db salina gydytoja
// $nr - gydytojo id duomenu bazeje
function deleteDoctor($nr) {
    $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);
    $manoSQL = "DELETE FROM doctors WHERE id=$nr";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti gydytojo numeriu: $nr <br>" . mysqli_error();
    }
}
// deleteDoctor(7);

// doctor UPDATE
// ($nr, $vardas, $pavarde)
function doctorUpdate($nr, $vardas, $pavarde) {
    $nr = mysqli_real_escape_string( getPrisijungimas(), $nr);
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);
    $manoSQL = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id='$nr'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti gydytojo numeriu: $nr <br>" . mysqli_error();
    }
}
// doctorUpdate(1, "Onute", "Garbanota");


// get all doctors from DB
// $kiekGydytoju - kiek paiimti gydytoju is Db. Jei nennurodytas paiimti 9999. O jei nurodytas paiimsim nurodyta skaiciu
function getDoctors() {
    $manoSQL= "SELECT * FROM doctors";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
// $visiGydytojai = getDoctors();
// $pirmasGydytojas = mysqli_fetch_assoc($visiGydytojai); // fetch - paiima viena eiute
