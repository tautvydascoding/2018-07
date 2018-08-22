<?php

// UZDUOTIS :
// a) PRISIJUNGTI PRIE DB
// b) sukurti f-ja, kuri paima visas informacija apie gydytoja
// c) panaudoti sia f-ja, ir atvaizduoti visus gydytojus

$rodytiZinutes = false;
    // $debugMode = 1;

    // konstantos
define('DB_NAME', "projektasU");
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
function getTextPaprasta($nr)
{
  $manoSQL = "SELECT * FROM aboutUsText WHERE id=$nr ";

    // grista obj !!! ne masyvas
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // is "$rezultatai" objekto  paimam duomenis i Array
  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);

  return $resultataiMasyvas;
}
//--------------end paprasta-----------

function getTextas($nr)
{
  $manoSQL = "SELECT * FROM aboutUsText WHERE id=$nr ";

        // grista obj !!! ne masyvas
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

        // jei DB-je radome
  if (mysqli_num_rows($rezultatai) > 0) {
            // is "$rezultatai" objekto  paimam vienus duomenis i masyva.
    $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
    return $resultataiMasyvas;
  } else {
    echo "<div class='bg-danger'> ERRRO: tokio teksto nr:" . $nr . " neradome</div> ";
  }

}


function getCaruselImg($nr)
{
  $manoSQL = "SELECT * FROM caruselIMG WHERE id=$nr ";

        // grista obj !!! ne masyvas
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

        // jei DB-je radome
  if (mysqli_num_rows($rezultatai) > 0) {
            // is "$rezultatai" objekto  paimam vienus duomenis i masyva.
    $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
    return $resultataiMasyvas;
  } else {
    echo "<div class='bg-danger'> ERRRO: caruselIMG nr:" . $nr . " neradome</div> ";
  }
}
    //  testing  

// $tekstas1 = getTextas(1); // veikia

// echo "<h2> $tekstas1[article]  </h2>";

// $pacientas1 = getPatient(1);
// print_r($pacientas1);
// echo "<h2> Pacientas <br> vardas: $pacientas1[name], pavarde:$pacientas1[lname], paciento id:$pacientas1[id], pacientas priskirtas gydytojui, kurio id:$pacientas1[doctor_id] </h2>";





/*

fja i DB ideda $gydytojas1
$nr - gydytojo 'id' duomenu bazeje

 */


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

function createTekstas($vardas, $article)
{

    //saugumas: real_escape_string - uzkoduoja spec simbolius: " ' < <> 

    //DARANT BE SPRINTF 
    // $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
    // $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
    //DARANT BE SPRINTF
    // toliau tas pats. 
    // $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde')";

    //totorialuose daznai daroma itin saugus variantas:
  $manoSQL = sprintf(
    "INSERT INTO aboutUsText
     VALUES (NULL, 
     '%s', 
     '%s'
     
     
     )",
    mysqli_real_escape_string(getPrisijungimas(), $vardas),
    mysqli_real_escape_string(getPrisijungimas(), $article)
  );
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// patikrina ar pavyko prisijungti.
  if ($arPavyko == false) {
    echo " error : nepavyko sukurti naujo article : $vardas, $article < br / > " . mysqli_error(getPrisijungimas());
  }
}

// createPatient('Martynas', 'Urbonas', 3);
// createDoctor(" Krista ", " Cerkauskaite ");




// 6. deleteDoctor($nr)

/*

fja is DB salina $gydytojas1
$nr - gydytojo 'id' duomenu bazeje

 */

function deleteTekstas($nr)
{
    // $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);

  $manoSQL = sprintf(
    "DELETE FROM aboutUsText 
                WHERE id = '%s' 
                LIMIT 1 /* cia imitas, kad gali ( klaidos atveju) istrinti tik viena.  */
                ",
    mysqli_real_escape_string(getPrisijungimas(), $nr)

  );
// nesumaisyti!        queris   prisijungimas     ir manoSQL uzklausa
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

  if ($arPavyko == false) {
    echo " error : nepavyko istrinti article, kurio nr: $nr < br / > " . mysqli_error(getPrisijungimas());
  }
}
// deleteDoctor(1);
// deletePatient(8);



//7. updateDoctor($nr, $vardas, $pavarde)


/*

  f-ja updeitina/ pakeicia informacija DB
  $nr - gydytojo 'id' duomenu bazeje
  $vardas - gydytojo vardas DB 
  $pavarde - gydytojo pavarde BD

 */


function updatePacient($nr, $vardas, $article)
{

  // echo "labas"; // tikrinti, ar veikia paeiliui

  $manoSQL = sprintf(
    "UPDATE aboutUsText 
                            SET 
                            name = '%s',
                            article = '%s'
                            WHERE id = '%s'
                            LIMIT 1
                            ",
    mysqli_real_escape_string(getPrisijungimas(), $vardas),
    mysqli_real_escape_string(getPrisijungimas(), $pavarde),
    mysqli_real_escape_string(getPrisijungimas(), $nr)

  );

  $arVeikia = mysqli_query(getPrisijungimas(), $manoSQL);

  if (!$arVeikia) {
    echo " error : nepavyko atnaujinti/pakeisti  article, kurio nr: $nr < br / > " . mysqli_error(getPrisijungimas());
  }
}
// updateDoctor(3, 'Teresyti', 'Teresauskiene');

// updatePacient(4, 'mARTYNASas', 'uRBAUSKAUSas', 1);

// VISU GYDYTOJU PAEMIMAS
// 8. getDoctors($kiekGydytoju)

/*

  f-ja paima visus gydytojus
  $kiekGydytoju - kiek paimti gydytoju. Jeigu nenurodytas - paimsim 9999. jEI NURODYTAS, tuomet paimsim tiek, kiek nurodyta.

 */

function getAllTekstai()
{
    // salyga, kad paimami visi gydytojai
  $manoSQL = "SELECT * FROM aboutUsText";

    // query grazina OBJEKTA NE MASYVA!!!!!!! sio objekto viduje yra daug eiluciu is DB. Siuo metu, visi duomenys is doctors lenteles yra musu php faile ir $visiGydytojai kintamajame
  $visiTekstai = mysqli_query(getPrisijungimas(), $manoSQL);

    // grazinam paimta gydytoja
  return $visiTekstai;

}

$visiTekstai = getAllTekstai();
$tekstas = mysqli_fetch_assoc($visiTekstai);

// while ($tekstas) {
//   echo " <h2> $tekstas[name] </h2 <br>
//   <h3> $tekstas[article] </h3>";
//   $tekstas = mysqli_fetch_assoc($visiTekstai);
// }
// $visiPacientai = getAllDoctors();
// echo "<h2> $pacientas[name] </h2>";
// while ($pacientas) {
//   echo " <h2> $pacientas[name] $pacientas[lname] </h2>";
//   $pacientas = mysqli_fetch_assoc($visiPacientai);
// }
// $pacientas = mysqli_fetch_assoc($visiPacientai); // FETCH paima tik viena eilute.

// visu gydytoju isvedimas
// AR TURIME GYDYTOJA? ar true?
// while ($gydytojas) {
//     echo " <h2> $gydytojas[name] $gydytojas[lname] </h2>";
//     $gydytojas = mysqli_fetch_assoc($visiGydytojai);
// }



// echo "vardas: $pirmasGydytojas[name] ";

// print_r($visiGydytojai);

// var_dump($pirmasGydytojas); // vieno gyd masyvas

// var_dump($visiGydytojai); //objektas