<?php

// UZDUOTIS :
// a) PRISIJUNGTI PRIE DB
// b) sukurti f-ja, kuri paima visas informacija apie gydytoja
// c) panaudoti sia f-ja, ir atvaizduoti visus gydytojus

$rodytiZinutes = true;
    // $debugMode = 1;

    // konstantos
define('DB_NAME', "hospital7");
define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_HOST', "localhost");

$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// nurodome, kad DB veiktu pagal utf8
mysqli_set_charset($prisijungimas, 'utf8');

if ($prisijungimas && $rodytiZinutes) {
    echo "Prisijungem prie DB: " . DB_NAME . " sekmingai :)";
} elseif ($rodytiZinutes) {
    echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error();
}
function getPrisijungimas()
{
    global $prisijungimas;
    return $prisijungimas;
}
//--------------paprastas-----
function getDoctorPaprasta($nr)
{
    $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";

    // grista obj !!! ne masyvas
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // is "$rezultatai" objekto  paimam duomenis i Array
    $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);

    return $resultataiMasyvas;
}
//--------------end paprasta-----------
function getDoctor($nr)
{
    $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";

        // grista obj !!! ne masyvas
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

        // jei DB-je radome
    if (mysqli_num_rows($rezultatai) > 0) {
            // is "$rezultatai" objekto  paimam duomenis i Array
        $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
        return $resultataiMasyvas;
    } else {
        echo "<div class='bg-danger'> ERRRO: gytytojo nr:" . $nr . " neradome</div> ";
    }

}

    //  testing  
    // $gydytojas1 = getDoctor(10000);
    // print_r(   $gydytojas1  );
    //
    // $gydytojas2 = getDoctor(2);
    // print_r(   $gydytojas2  );
    //
    // $gydytojas5 = getDoctor(5);
    // print_r(   $gydytojas5  );
    //


    //FUNKCIJA SUKURTI DAKTARA
//// 5. createDoctor($vardas, $pavarde)
// PAPRASTASIS VARIANTAS BE SAUGUMO.

// function createDoctorNotsafe($vardas, $pavarde)
// {
//  // sukuriam ir pasitikrinam ar veikia. (query)
//  // i TERMINALA DETI BE KABUCIU!!!
//     $manoSQL = "INSERT INTO doctors VALUES (NULL,'$vardas', '$pavarde' )";
//     mysqli_query(getPrisijungimas(), $manoSQL);
// }


// prisijungiam per local prie sito php failo, ir siuos tris gydytojus, perkrovus DB, sukurs.
// uzkomentinti, nes perkrovus jis jas kurs.
// createDoctor("Onute", "Cerkauskaite");
// createDoctor("Povilas", "Povilaitis");
// createDoctor("Antanas", "Antanaitis");


// SAUGESNIS VARIANTAS:

function createDoctor($vardas, $pavarde)
{

    //saugumas: real_escape_string - uzkoduoja spec simbolius: " ' < <> 
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
    // toliau tas pats. 
    // $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde')";
    //totorialuose daznai daroma itin saugus variantas:
    $manoSQL = sprintf(
        "INSERT INTO doctors
     VALUES (NULL, 
     '%s', 
     '%s'
     
     )",
        mysqli_real_escape_string(getPrisijungimas(), $vardas),
        mysqli_real_escape_string(getPrisijungimas(), $pavarde)
    );


    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// patikrina ar pavyko prisijungti.
    if ($arPavyko == false) {
        echo " error : nepavyko sukurti naujo gydytojo : $vardas, $pavarde < br / > " . mysqli_error(getPrisijungimas());
    }
}
createDoctor(" Krista ", " Cerkauskaite ");
// 6. deleteDoctor($nr)
// 7. updateDoctor($nr, $vardas, $pavarde)
// 8. getDoctors($kiekGydytoju)
