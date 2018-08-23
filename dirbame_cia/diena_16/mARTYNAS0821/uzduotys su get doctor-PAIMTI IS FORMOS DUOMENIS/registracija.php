<?php

include_once("db_functions_CRUD.php");

// issisaugom viskapasinaudoje GET globaliu kintamuoju i gyd.
$gyd = $_GET;

// if (isset($_GET['vardas'])) {
//   $vardas = $_GET['vardas'];
//   echo $vardas;
// }
// print_r($gyd);

// echo " <h2>   $gyd[vardas], $gyd[pavarde] </h2> ";


createDoctor($gyd['vardas'], $gyd['pavarde']);

echo "<h2> Jusu duomenys:  -$gyd[vardas]  $gyd[pavarde]-  buvo sukurti sekmingai. </h2>";
// echo "<META http-equiv='refresh' content='2;URL=indexs.php'> ";
echo "<META http-equiv='refresh' content='2;URL=indexs.php'> ";