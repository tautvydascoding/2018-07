<?php

// prisijungti prie duombazes
//b sukurti informacija kuri paima informacija apie gygytoja
//c panaudoti sia funkcija ir atvaizduoti visus gydytojus
$rodytiZinutes = true;
// konstantos
define('DB_NAME', "hospital7");
define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_HOST', "localhost");

$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}

  if ( $prisijungimas && $rodytiZinutes ) {
    echo "Prisijungem prie DB" . DB_NAME . "sekmingai:)";
 } elseif( $rodytiZinutes ){
    echo "ERROR: nepavyko prisijungti prie DB " .mysqli_connet_error();
 }

 // function getDoctor($nr) {
 //   $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";
 //   $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
 //    //Is $rezultatai objekto paimam pirma eilute i Array
 //   $rezultataiMasyvas = mysqli_fetch_assoc( $rezultatai );
 //   return $rezultataiMasyvas;
 // }
 //if (mysqli_num_rows($rezultatai)>0) {
   //$rezultataiMasyvas = mysqli_fetch_assoc( $rezultatai );

 // } else {
 //   echo "<br> SO_ERROR: gydytojo tokiu numeriu nera". $nr . "neradome";

//}


 $gydytojas3 = getDoctor(3);
 print_r( $gydytojas3 );

 $gydytojas2 = getDoctor(2);
 print_r( $gydytojas2 );

 $gydytojas300 = getDoctor(300);
 print_r( $gydytojas300 );
