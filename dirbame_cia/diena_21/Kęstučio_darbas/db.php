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


           $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);


           if (mysqli_num_rows($rezultatai) > 0) {

               $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
               return $resultataiMasyvas;
           } else {
           echo "Tokio įrašo duomenu bazėje nėra" . $nr . " neradome ";
           }

       }

       function getViezbutis($nr) {
              $manoSQL = "SELECT * FROM viežbučių WHERE Viežbučio_id=$nr ";


              $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);


              if (mysqli_num_rows($rezultatai) > 0) {

                  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
                  return $resultataiMasyvas;
              } else {
              echo "Tokio įrašo duomenu bazėje nėra" . $nr . " neradome ";
              }

          }

          function getKontaktai() {
                 $manoSQL = "SELECT * FROM kontaktai";
                 $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
                 return $rezultatai;

             }
