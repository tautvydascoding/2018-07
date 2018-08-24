<?php
require_once("classGyvunas.php");

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'

class Vilkas extends Gyvunas
{
  public $tipas = "Baltasis ";
  //public $svoris = PAVELDETAS
  //public function getPusryciai = PAVELDETAS - todel galim is kart iskviesti.
  public function getLigos()
  {
    return $this->ligos;
  }

}

 // UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'

  // UZDUOTIS 2.0:
 // sukurti VILKO OBJEKTA ir
 // pabandyti isvesti visa info apie Vilka:
 // tipas
 // svoris,
 // ligos     // kalida
 // pusryciai // klaida

$usurinis = new Vilkas();

$tipas = $usurinis->tipas;
$svoris = $usurinis->svoris;

echo " <h2>Usurinio vilko tipas:  $tipas  </h2>";
echo "<h3> usurinio vilko svoris: $svoris Kg. </h3>";

$ligos = $usurinis->getLigos();

echo $ligos;

$pusrytis = $usurinis->getPusryciai();

echo "<h3> cia ka edem: $pusrytis</h3> "; 

 // UZDUOTIS 3
 // klaseje 'Vilkas' sukurti f-jas:
 // public printLigos()
 // public printPusryciai() // neveiks

 // UZDUOTIS 4
 // klaseje 'Gyvunas' sukurti f-jas:
 // public printPusryciai()
