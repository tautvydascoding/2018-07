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
    function createDoctorTRUMPA($vardas, $pavarde) {

            // SAUGUMAS:  uzkoduoja spec. simbolius "  ' \n \t < >
            $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
            $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);

            $manoSQL = "INSERT INTO  doctors VALUES (NULL, '$vardas', '$pavarde');  ";
            $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

    }

    function createDoctor($vardas, $pavarde) {
     // $istorija = sprintf("%s keliavo per %s ir sutiko %s raudona",  $vardas, "laukus", $pavarde );

        // !!! pasitikrinti ar SQL veikai terminale
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

    /*
        f-ja is DB salina $gydytojas
        $nr - gydytojo 'id' duomenu bazeje
    */
    function deleteDoctor($nr) {
        $manoSQL = sprintf("DELETE FROM doctors
                                   WHERE id = %s
                                   LIMIT 1
                          ",
                                    mysqli_real_escape_string(getPrisijungimas(), $nr)
                            );
        $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
        if ($arPavyko == false) { //
            echo "ERRRO: nemavyko istrinti gydytojo nr: $nr <BR />";
        }
    }
    // deleteDoctor(1); // test
    /*
        update/ change doctor information in DB
    */
    function updateDoctor($nr, $vardas, $pavarde) {
        //
        // $istorija = sprintf("%s keliavo per %s ir sutiko %s raudona",  $vardas, "laukus", $pavarde );
        // UPDATE doctors SET name='onute', lname='aaa' WHERE id=4 LIMIT 1
        $manoSQL = sprintf("UPDATE doctors SET
                                                name='%s',
                                                lname='%s'
                                            WHERE id = %s
                                            LIMIT 1
                            ",
                            mysqli_real_escape_string(getPrisijungimas(), $vardas),
                            mysqli_real_escape_string(getPrisijungimas(), $pavarde),
                            mysqli_real_escape_string(getPrisijungimas(), $nr)
                        );
        $arVeikia = mysqli_query(getPrisijungimas(), $manoSQL);
        if (!$arVeikia) {
            echo "ERROR: nepavyko koreguoti nr: $nr" . mysqli_error(getPrisijungimas());
        }
    }
    // updateDoctor(4, 'Onute', 'Griebliauskiene');

    /*
        get all docotrs form DB
        $kiekGydytoju - kiek paimti gydytoju is DB. Jei nenurodytas - paimisim 9999.
        O jeigu nurodytas - paimsim nurodyta kieki
    */
    function getDoctors() {
        $manoSQL = "SELECT * FROM doctors";
        // mysqli_query - grazina Objekta !!! ne masyva (sio objekto viduje yra daug eiluciu is DB)
        $resultai = mysqli_query(getPrisijungimas(), $manoSQL);
        return $resultai;
    }

    // ==================PANAUDOJIMAS ==================
    // visu gydytoju isvedimas
    $visiGydytojai = getDoctors();
    // AR TURIME  gydytoja? Ar true?
    while (     $gydytojas = mysqli_fetch_assoc($visiGydytojai) ) {
        echo "<h2>$gydytojas[name]  $gydytojas[lname]     </h2>";
    }

    //=========ilgesnis budas - suprantamesnis-------------
    // // AR TURIME  gydytoja?
    // $gydytojas = mysqli_fetch_assoc($visiGydytojai); // fetch - paima sekancia eilute
    // while (     $gydytojas   ) {
    //     echo "<h2>$gydytojas[name]  $gydytojas[lname]     </h2>";
    //     $gydytojas = mysqli_fetch_assoc($visiGydytojai); // fetch - paima sekancia eilute
    // }

    // echo "vardas: $pirmasGydytojas[name]  <br />";
    // // var_dump($pirmasGydytojas ); // vieno gydytojo masyvas
    // echo "<br />";
    // echo "<br />";
    // echo "<br />";
    // // var_dump($visiGydytojai );  // OBJEKTAS
