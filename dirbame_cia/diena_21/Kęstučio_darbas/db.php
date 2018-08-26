<?php
$rodytiZinutes = false;
    // $debugMode = 1;

    // konstantos
    define('DB_NAME', "kelione");
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

    function getNav($nr) {
           $manoSQL = "SELECT * FROM meniu WHERE meniu_ID=$nr ";

           // grista obj !!! ne masyvas
           $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);

           // jei DB-je radome
           if (mysqli_num_rows($rezultatai) > 0) {
               // is "$rezultatai" objekto  paimam duomenis i Array
               $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
               return $resultataiMasyvas;
           } else {
           echo "Tokio įrašo duomenu bazėje nėra" . $nr . " neradome ";
           }

       }

       function getViezbutis($nr) {
              $manoSQL = "SELECT * FROM viežbučių WHERE Viežbučio_id=$nr ";

              // grista obj !!! ne masyvas
              $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);

              // jei DB-je radome
              if (mysqli_num_rows($rezultatai) > 0) {
                  // is "$rezultatai" objekto  paimam duomenis i Array
                  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
                  return $resultataiMasyvas;
              } else {
              echo "Tokio įrašo duomenu bazėje nėra" . $nr . " neradome ";
              }

          }

    //    function getViezbuciai() {
    //     $manoSQL = "SELECT * FROM viežbučių lentelė";
    //     // mysqli_query - grazina Objekta !!! ne masyva (sio objekto viduje yra daug eiluciu is DB)
    //     $resultai = mysqli_query(getPrisijungimas(), $manoSQL);
    //     return $resultai;
    // }
    //
    //
    //    // visu viežbuciu isvedimas
    //        $visiviezbuciai = getViezbuciai();
    //        while (     $viezbutis = mysqli_fetch_assoc($visiviezbuciai) ) {
    //         echo "<h2>$viezbutis[pavadinimas]  $viezbutis[aprasymas]     </h2>";
    //        }
