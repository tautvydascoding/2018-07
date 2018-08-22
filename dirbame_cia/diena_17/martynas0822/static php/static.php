<?php


function test()
{
  static $a = 100; // sita eilute suveiks tik viena karta gyvenima., ty. sukurs statik kintamaji ir pc daugiau to nebedarys ir ji praleis.
  echo $a . "<br>";

  $a -= 12;

}
// test(); // 100
// test(); // 99
// test(); // 98
// test(); // 97
// rekursija - funkcija, kuri pati save issikviecia.

#uzduotis iskviesti funkcija viena karta, bet si funkcija turi suveikti 10 kartu
# ( atspausdinti, kelinta karta suveikia).

/*
function test2()
{
  static $i = 1;
  echo "paleidimo nr: $i <br>";
  $i++;

  if ($i < 11) {
    test2();

  }



}
test2();
 */
?>