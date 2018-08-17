<?php

// uzduotis:

// a. prisijungti prie duomenu bazes
//b. sukurti funkcija, kuri paima info apie gydytoja.
//c.panaudoti funkcija ir atvaizduoti visus gydytojus.





//a.

$rodytiZinutes = true; // rodymas ( debug mode, kuris skirtas programtuojams.)
// $debugMode = 3; // daugiau praktikoje naudojamas angliska fraze. su 0 ,1 ,2 ,3. 0 reiskia isjungtas, 1 rodo tik fatal errorus, 2 rodo daugiau ir 3 rodo VISKA.
//konstantos

define(DB_NAME, "hospital7");
define(DB_USER, "marbonas");
define(DB_PASSWORD, "SmikisMq99");
define(DB_HOST, "localhost");

// labai svarbi tvarka. turi buti kaip nurodyta, host,user,password,dbname.
// prisijungia viena karta ir po to issaugojam, kad nereiketu vel prisijungineri
$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//==   if conditione true nebutina, nes conditionas visada tikrina ar true. if statementai, kurie tikrina labai svarbus, nes kartais uztrunka net visa diena, ieskant klaidu, jei neprisijungei prie DB.
if ($prisijungimas) {
  echo "prisiungem prie db bazes" . DB_NAME . "sekmingai  :)";
} else if ($rodytiZinutes) {
  echo "ERROR: nepavyko prisijungti prie db bazes" . mysqli_connect_error(); // jis reikalingas mum, testuotojams. 
}

// si funkcija paduos mum prisijungimus
function getPrisijungimas()
{
  global $prisijungimas;
  return $prisijungimas;

}





function getDoctor($nr)
{
  //0 susikuriam kintama, kuriam issaugosim salyga kurios ieskom
  $manoSQL = " SELECT * FROM doctors WHERE id = $nr "; // gausime stringa. PASITIKRINTI TERMINALE, AR STRINGAS PARASYTAS GERAI IR AR VEIKIA, NES STRINGU NETIKRINA
  //1.
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);// sukurtas rezultatai, kad issaugotume tai ka graziname.. CIA GRIZTA OBJEKTAS!!!! NE MASYVAS!!!
  //2.



  //4. tikrinimas, ar toks gydytojas yra . jis nebutinas, galima ir trumpiau, pvz null
  if (mysqli_num_rows($rezultatai) > 0) {
  // PAVERCIAM OBJEKTA MASYVU
  // is objekto $rezultatai, paimami duomenys i array ( associative array)
    $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);
      // 3. returninam rezultatus masyve
    return $rezultataiMasyvas;
  } else {
    echo "<div class='bg-danger'> 
    <br> ERROR: gydytojo nr:  . $nr . NERA!!!
   </div>";
  }

}

// cia tik testavimaui
// $gydytojas3 = getDoctor(3);
// print_r($gydytojas3);
















