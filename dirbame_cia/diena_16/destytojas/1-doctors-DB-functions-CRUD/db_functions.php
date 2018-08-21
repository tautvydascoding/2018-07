<?php


//  // exprot using terminal
// C:\MAMP\bin\mysql\bin\mysqldump.exe -u root -p 'hospital1' > "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"
//
// C:\xampp\mysql\bin\mysqldump.exe -u root -p hospital10 > "C:\Users\info\Documents\Projektai\uzduotys\MAMP\diena_15\Elvinas\doctors_DB\mano_DB.sql"
//
// //import using terminal
// C:\MAMP\bin\mysql\bin\mysql.exe -u root -p 'hospital1' < "C:\Users\User\Documents\Projektas\uzduotys\MAMP\diena_15\mano_DB.sql"


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

    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889 );


    mysqli_set_charset($prisijungimas, 'utf8');
    // Note: Possible UTF-8 confusion
    // Because character set names in MySQL do not contain dashes, the string "utf8" is valid in MySQL to set the character set to UTF-8. The string "utf-8" is not valid, as using "utf-8" will fail to change the character set.


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
function getDoctorPaprasta($nr) {
    $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";

    // grista obj !!! ne masyvas
    $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
    // is "$rezultatai" objekto  paimam duomenis i Array
    $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);

    return $resultataiMasyvas;
}
//--------------end paprasta-----------
    function getDoctor($nr) {
        $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";

        // grista obj !!! ne masyvas
        $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);

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


    //  createDoctor($vardas, $pavarde)
    // function createDoctorNotSafe($vardas, $pavarde) {
    //     // !!! pasitikrinti ar SQL veikai terminale
    //     $manoSQL = "INSERT INTO  doctors VALUES (NULL, '$vardas', '$pavarde');  ";
    //     mysqli_query(getPrisijungimas(), $manoSQL);
    // }
    function createDoctor($vardas, $pavarde) {
        // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
        $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
        $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

        // !!! pasitikrinti ar SQL veikai terminale
        // $manoSQL = "INSERT INTO  doctors VALUES (NULL, '$vardas', '$pavarde');  ";
        $manoSQL = sprintf("INSERT INTO  doctors VALUES (
                                    NULL,
                                   '%s',
                                   '%s'
                                    ) ",
                         mysqli_real_escape_string(getPrisijungimas(), $vardas),
                         mysqli_real_escape_string(getPrisijungimas(), $pavarde)
                      );


        $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
        if ($arPavyko == false) {   // !$arPavyko
            echo "ERROR: nepavyko sukurti naujo gydytojo: $vardas, $pavarde <br />" . mysqli_error(getPrisijungimas()) ; // jeigu nepavyko
        }
    }
    // createDoctor("Onute", "Cerkauskaite");
    // createDoctor("Povilas", "Povilaitis");
    // createDoctor("Antanas", "Kalauskaitis");

    // 6. deleteDoctor($nr)
    // 7. updateDoctor($nr, $vardas, $pavarde)
    // 8. getDoctors($kiekGydytoju=99999)
