
<!-- // uzduotis2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4 -->
<!-- // uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li" -->
<!-- uzduotis4: patobulinti 'uzduotis3', -->
    <!-- kad paspaudus ant gydytojo vardo/pavardes   atidarytu doctor.php faila -->
<!-- // uzduotis5: patobulinti uzduotis4, -->
    <!-- kad   doctor.php faile isvestu info apie - paspausta gydytoja -->

    <!-- HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji -->
 


<?php


include_once("db_functions.php");

$gydytojas1 = getDoctor(4);

print_r($gydytojas1);


// foreach ($gydytojas1 as $stalcius) {
//   echo $stalcius;
// }

//  uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li" -->
// <!-- uzduotis4: patobulinti 'uzduotis3', -->
//     <!-- kad paspaudus ant gydytojo vardo/pavardes   atidarytu doctor.php faila -->

// <!-- // uzduotis5: patobulinti uzduotis4, -->
//     <!-- kad   doctor.php faile isvestu info apie - paspausta gydytoja -->

// <!-- HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji -->
echo "<ul>";
for ($i = 1; $i < 5; $i++) {
  $gydytojai = getDoctor($i);
  // uz klustuko a linke, yra beprasme info, bet ja pasinaudojus galima pajamti. siuo atveju nurodome gydytoju id nr, kuris kinta
  echo "<li> 
  <a href='doctor.php?nr=$gydytojai[id]' target='_blank'>$gydytojai[name] $gydytojai[lname] </a>
   </li> ";

}
echo "</ul>";


// echo "<div class='row'>";
// for ($i = 1; $i < 6; $i++) {
//   $gydytojas = getDoctor($i);
//   include('template-item.php');
// }
// echo "</div>";






?>
<!-- // uzduotis2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4 -->
<p> <?php foreach ($gydytojas1 as $stalcius) {
      echo $stalcius;
    } ?> </p>


    <!-- // uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li" -->

  
<ul>


</ul>


