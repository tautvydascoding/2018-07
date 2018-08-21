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

    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

mysqli_set_charset($prisijungimas, 'utf8');

    if ( $prisijungimas && $rodytiZinutes ) {
        echo "Prisijungem prie DB: " . DB_NAME . " sekmingai :)";
    } elseif( $rodytiZinutes )  {
        echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error();
    }
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
//--------------paprastas-----
// function getDoctorPaprasta($nr) {
//     $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";
//
//     // grista obj !!! ne masyvas
//     $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
//     // is "$rezultatai" objekto  paimam duomenis i Array
//     $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
//
//     return $resultataiMasyvas;
// }
//--------------end paprasta-----------
    // function getDoctor($nr) {
    //     $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";
    //
    //     // grista obj !!! ne masyvas
    //     $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
    //
    //     // jei DB-je radome
    //     if (mysqli_num_rows($rezultatai) > 0) {
    //         // is "$rezultatai" objekto  paimam duomenis i Array
    //         $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
    //         return $resultataiMasyvas;
    //     } else {
    //     echo "<div class='bg-danger'> ERRRO: gytytojo nr:" . $nr . " neradome</div> ";
    //     }
    //
    // }

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

//
// 5. createDoctor($vardas, $pavarde)

// function createDoctor($vardas, $pavarde) {
//   // Saugumas
//   $vardas = mysqli_real_esceape_string(getPrisijungimas(), $vardas);
//   $pavarde = mysqli_real_esceape_string(getPrisijungimas(), $pavarde);
//   $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde'); ";
//   // mysqli_query(getPrisijungimas(), $manoSQL);
// }
//   // $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
  // ($arPavyko == false ) {
  //   echo "ERROR nepavyko sukurti gydytojo";

// createDoctor("Onute", "Cerkauskaite");
// createDoctor("Povilas", "Povilaitis");
// createDoctor("Antanas", "Kalauskaitis");

//funkcija salina $gydytojas1
//nr duombazeja id gydytojo duombazeja

// function deleteDoctor($nr) {
//     $nr = mysqli_real_escape_string(getprisijungimas(), $nr );
//     $manoSQL = "DELETE FROM doctors WHERE ID = '$nr'";
//     $arIstrynem = mysqli_query(getPrisijungimas(), $manoSQL);
//     // ($arIstrynem == false) {
//     //   echo "Error nepavyko istrynti";
//     // }
// }

// deleteDoctor(12);
//
// function deleteDoctor2($nr) {
//             $manoSQL = sprintf("DELETE FROM getDoctorPaprasta
//                                         WHERE id = %s
//                                         LIMIT 1
//                                           ",
//                                           mysqli_real_escape_string(getPrisijungimas(), $nr)
//                                         );
//     $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
//     if ($arPavyko == false ) {
//       echo "nepavyko";
//     }
// }
// deleteDoctor2(10);

//?
include 'header.php';

 // ?
 function getDoctors() {
    $manoSQL = "SELECT * FROM doctors name";
     $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
     return $rezultatai;
    }



$visiGydytojai = getDoctors();

while ( $gydytojas = mysqli_fetch_assoc($visiGydytojai) ) {
    echo "<h4>$gydytojas[name] $gydytojas[lname] </h4>
          <a class='btn btn-primary' href='delete-doctor.php?nr=$gydytojas[id]' role='button'>Trinti</a>";
}
