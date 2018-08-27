<?php
//-=-=-==-=- PRISIJUNGIMAS=-=-=-=-=-
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



//=-=-=-==-=-=-- END OF PRISIJUNGIMAS =-=-=-=-=-



