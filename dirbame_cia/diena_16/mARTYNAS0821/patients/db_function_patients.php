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
function getPatientsPaprasta($nr)
{
  $manoSQL = "SELECT * FROM patients WHERE id=$nr ";

    // grista obj !!! ne masyvas
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // is "$rezultatai" objekto  paimam duomenis i Array
  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);

  return $resultataiMasyvas;
}
//--------------end paprasta-----------
function getPatient($nr)
{
  $manoSQL = "SELECT * FROM patients WHERE id=$nr ";

        // grista obj !!! ne masyvas
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

        // jei DB-je radome
  if (mysqli_num_rows($rezultatai) > 0) {
            // is "$rezultatai" objekto  paimam vienus duomenis i masyva.
    $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
    return $resultataiMasyvas;
  } else {
    echo "<div class='bg-danger'> ERRRO: paciento nr:" . $nr . " neradome</div> ";
  }

}

    //  testing  

// $pacientas1 = getPatient(1);
// print_r($pacientas1);
// echo "<h2> Pacientas <br> vardas: $pacientas1[name], pavarde:$pacientas1[lname], paciento id:$pacientas1[id], pacientas priskirtas gydytojui, kurio id:$pacientas1[doctor_id] </h2>";
    // $gydytojas1 = getDoctor(10000);
    // print_r(   $gydytojas1  );
    //
    // $gydytojas2 = getDoctor(2);
    // print_r(   $gydytojas2  );
    //
    // $gydytojas5 = getDoctor(5);
    // print_r(   $gydytojas5  );
    //




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

function createPatient($vardas, $pavarde, $gydNr)
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
    "INSERT INTO patients
     VALUES (NULL, 
     '%s', 
     '%s',
     '%s'
     
     )",
    mysqli_real_escape_string(getPrisijungimas(), $vardas),
    mysqli_real_escape_string(getPrisijungimas(), $pavarde),
    mysqli_real_escape_string(getPrisijungimas(), $gydNr)
  );
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
// patikrina ar pavyko prisijungti.
  if ($arPavyko == false) {
    echo " error : nepavyko sukurti naujo paciento : $vardas, $pavarde, $gydNr < br / > " . mysqli_error(getPrisijungimas());
  }
}

// createPatient('Martynas', 'Urbonas', 3);
// createDoctor(" Krista ", " Cerkauskaite ");




// 6. deleteDoctor($nr)

/*

fja is DB salina $gydytojas1
$nr - gydytojo 'id' duomenu bazeje

 */

function deletePatient($nr)
{
    // $nr = mysqli_real_escape_string(getPrisijungimas(), $nr);

  $manoSQL = sprintf(
    "DELETE FROM patients 
                WHERE id = '%s' 
                LIMIT 1 /* cia imitas, kad gali ( klaidos atveju) istrinti tik viena.  */
                ",
    mysqli_real_escape_string(getPrisijungimas(), $nr)

  );
// nesumaisyti!        queris   prisijungimas     ir manoSQL uzklausa
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);

  if ($arPavyko == false) {
    echo " error : nepavyko istrinti paciento, kurio nr: $nr < br / > " . mysqli_error(getPrisijungimas());
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


function updatePacient($nr, $vardas, $pavarde, $gydNr)
{

  $manoSQL = sprintf(
    "UPDATE patients 
                            SET 
                            name = '%s',
                            lname = '%s',
                            doctor_id = '%s'
                            WHERE id = '%s'
                            LIMIT 1
                            ",
    mysqli_real_escape_string(getPrisijungimas(), $vardas),
    mysqli_real_escape_string(getPrisijungimas(), $pavarde),
    mysqli_real_escape_string(
      getPrisijungimas(),
      $gydNr
    ),
    mysqli_real_escape_string(getPrisijungimas(), $nr)

  );

  $arVeikia = mysqli_query(getPrisijungimas(), $manoSQL);

  if (!$arVeikia) {
    echo " error : nepavyko atnaujinti/pakeisti  paciento, kurio nr: $nr < br / > " . mysqli_error(getPrisijungimas());
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

function getAllPatients()
{
    // salyga, kad paimami visi gydytojai
  $manoSQL = "SELECT * FROM patients";

    // query grazina OBJEKTA NE MASYVA!!!!!!! sio objekto viduje yra daug eiluciu is DB. Siuo metu, visi duomenys is doctors lenteles yra musu php faile ir $visiGydytojai kintamajame
  $visiPacientai = mysqli_query(getPrisijungimas(), $manoSQL);

    // grazinam paimta gydytoja
  return $visiPacientai;

}

$visiPacientai = getAllPatients();
$pacientas = mysqli_fetch_assoc($visiPacientai);
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