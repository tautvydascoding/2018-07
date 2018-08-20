<!-- // uzduotis2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
// uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li"
// uzduotis4: patobulinti 'uzduotis3',
    kad paspaudus ant gydytojo vardo/pavardes   atidarytu doctor.php faila
// uzduotis5: patobulinti uzduotis4,
    kad   doctor.php faile isvestu info apie - paspausta gydytoja

    HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji -->
<?php
include_once ('db_functions.php');
$gydytojas4 = getDoctor(4);
// su foreach atspaudinti visa infomacija
// foreach ($gydytojas4 as $stalcius) {
//     echo "<p>$stalcius</p>";
// }

echo "<p>Numeris: " . $gydytojas4['id'] . " Vardas: " . $gydytojas4['name'] . " Pavarde: "  . $gydytojas4['lname'] . "</p>";
// print_r($gydytojas4);

echo "<ul>";
for ($i=1; $i < 5 ; $i++) {
    $visiGydytojai = getDoctor($i);
    echo "<a href='doctor.php?id=". $visiGydytojai['id'] ."'><li>" . $visiGydytojai['name'] ." ". $visiGydytojai['lname'] . "</li></a>";
}
echo "</ul>";
