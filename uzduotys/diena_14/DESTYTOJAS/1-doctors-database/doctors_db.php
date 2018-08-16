<?php

 // visa info apie php
 // phpinfo( );

//  // exprot using terminal
// C:\MAMP\bin\mysql\bin\mysqldump.exe -u root -p 'hospital1' > "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"
//
// C:\xampp\mysql\bin\mysqldump.exe -u root -p hospital10 > "C:\Users\info\Documents\Projektai\uzduotys\MAMP\diena_15\Elvinas\doctors_DB\mano_DB.sql"
//
// //import using terminal
// C:\MAMP\bin\mysql\bin\mysql.exe -u root -p 'hospital1' < "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"

 define('DB_NAME', 'hospital1');
 define('UNSER', 'root');
 define('PASSWORD', 'root');
 define('DB_HOST', 'localhost');



// getDoctor($nr)
// createDoctor($vardas, $pavarde)
// deleteDoctor($nr)
// editDoctor($nr, $vardas, $pavarde)
// getDoctors($kiekis = 9999)

$connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME);
// $connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME, 8888); su pakeistu PORTu

function getPrisijungimas() {
    global $connnection;

    if( !$connnection ) {
        echo "ERROR prisijungti prie DB " . DB_NAME . " nepavyko <br>";
        echo "ERROR  " . mysqli_connect_error($connnection) . " <br>";
    } else {
        echo "Jus prisijungete prie DB <br>";
    }

    return $connnection;
}

 //===========
 function getDoctor($nr) {
     $manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
     // mysqli_query - grazina duomenis MYSQL objekte
     $resultatai = mysqli_query(    getPrisijungimas(), $manoSQL); // mysqli_query - ivykdo uzduota SQL teksta

     if( !$resultatai  ) {
         echo "Ieskomo gydyotjo nera. nr: " . $nr . " <br> ";
         return NULL;
     } else {
         // MYSQL objekta verciam i masyvas
         $resultatu_masyvas = mysqli_fetch_assoc(   $resultatai   );
         return $resultatu_masyvas;
         // mysqli_fetch_assoc - pavercia i associatyvu masyva
         // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
         // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
     }
 }
 // $gydytojas = getDoctor(1); // masyvas
 // if( $gydytojas != NULL) {
 //     echo $gydytojas['name'] . " " ;
 //     echo $gydytojas['lname'] . " " ;
 //     echo $gydytojas['id'] . "<br>" ;
 // }
//
