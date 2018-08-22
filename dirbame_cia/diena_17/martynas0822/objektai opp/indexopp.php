<?php

class zmogus
{
  public $vardas = "vardas";
  public $ugis = 0;
  function einu()
  {
    echo "Einu, einu...";
  }
}

$monika = new zmogus();
// priskirimas:
$monika->vardas = "Monika <br>";
$monika->ugis = 1.66;

// echo " naujo objekto pavadinimas: <strong> $monika->vardas </strong>  ";
//paemimas
$monika->ugis;
// echo " objekto ugis: <strong> $monika->ugis</strong> <br>";
// echo $monika->einu();

$tadas = new zmogus();
$tadas->vardas = "tadas";
$tadas->ugis = 1.78;

// echo "<br>$tadas->vardas ";


$kestas = new zmogus();
$kestas->vardas = "kestas";
$kestas->ugis = 1.99;

// echo "<br> <strong>$kestas->vardas ";


//   3.2 uzduotis






