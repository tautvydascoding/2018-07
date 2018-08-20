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

mysqli_set_charset($connnection, 'utf8');
// Note: Possible UTF-8 confusion
// Because character set names in MySQL do not contain dashes, the string "utf8" is valid in MySQL to set the character set to UTF-8. The string "utf-8" is not valid, as using "utf-8" will fail to change the character set.

function getPrisijungimas() {
    global $connnection;

    if( !$connnection ) {
        echo "ERROR prisijungti prie DB " . DB_NAME . " nepavyko <br>";
        echo "ERROR  " . mysqli_connect_error($connnection) . " <br>";
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
 // $gydytojas = getDoctor(8); // masyvas
 // if( $gydytojas != NULL) {
 //     echo $gydytojas['name'] . " " ;
 //     echo $gydytojas['lname'] . " " ;
 //     echo $gydytojas['id'] . "<br>" ;
 // }
//

/*
    idejimas i duomenu baze
    $vardas - kuraimo gydytojo vardas
    $pavarde - kuraimo gydytojo pavarde
*/
function createDoctor($vardas, $pavarde) {
    $manoSQL =  " INSERT INTO doctors VALUES ('', '$vardas', '$pavarde' ); ";
    mysqli_query(   getPrisijungimas(), $manoSQL);
}
// createDoctor('Tomą', "Pieštkauskas");
// createDoctor('Marius', "Maraiuskis");
// createDoctor('Paulina', "Ovia");
function createDoctor222($vardas, $pavarde) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

    $manoSQL =  " INSERT INTO doctors VALUES ('', '$vardas', '$pavarde' ); ";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if($arPavyko) {
            // pavyko
    } else { // nepavyko
        echo "ERROR: sukurti gydytojo nepavyko " . mysqli_error(getPrisijungimas()) . " <br>";
    }
}

// createDoctor222("veronika", 'verotaite');

// gydytojo trinimas is DB
function deleteDoctor( $nr ) {
    $manoSQL = " DELETE FROM doctors WHERE id='$nr'; ";
    mysqli_query( getPrisijungimas(), $manoSQL);
}
// deleteDoctor( 11 );

// gydytojo redagavimas
function updateDoctor($nr, $vardas, $pavarde) {
    // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string( getPrisijungimas(), $pavarde);

    $manoSQL = "UPDATE doctors SET   name='$vardas', lname='$pavarde'
                               WHERE id='$nr';
                    ";
    mysqli_query( getPrisijungimas(),  $manoSQL );
}
// updateDoctor(7, "Onute", 'Onutaite');

// visu gydytoju paemimias
function getDoctors() {
    $manoSQL = "SELECT * FROM doctors; ";
    $visi_gydytojai =  mysqli_query( getPrisijungimas() , $manoSQL);

    if($visi_gydytojai  ){
        return $visi_gydytojai;
    } else {
        echo "ERRROR: neradom gydytoju: " . mysqli_error( getPrisijungimas() );
        return NULL;
    }
}
// $all_doctors = getDoctors();
// print_r(  $all_doctors );
// var_dump(  $all_doctors );

// mysqli_fetch_assoc - is MYSQL objekto paima pirma "eilute" ir ja pavercia i masyva
// $gydytojas = mysqli_fetch_assoc( $all_doctors );

// while( $gydytojas ) {
//     echo  $gydytojas['lname']  . '<br>';               // xxx <br>
//     echo  " vardas: " . $gydytojas['name'] . '<br>';  // vardas: xxx <br>
//
//     $gydytojas = mysqli_fetch_assoc( $all_doctors); // imame sekancia eilute/ sekanti gydytoja
// }


// ARBA TRUMPIAU
// while( $gydytojas = mysqli_fetch_assoc( $all_doctors)) {
//     echo  $gydytojas['lname']  . '<br>';               // xxx <br>
//     echo  " vardas: " . $gydytojas['name'] . '<br>';  // vardas: xxx <br>
// }



//
