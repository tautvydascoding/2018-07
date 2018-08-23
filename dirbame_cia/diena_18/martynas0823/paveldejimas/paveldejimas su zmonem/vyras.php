<?php
include_once("zmogus.php");


class Vyras extends Zmogus
{
  private $testosteronas = 6122;

  function setTestosteronas($newTestoteronas)
  {
    $this->testosteronas = $newTestoteronas;
  }
  function getTestosteronas()
  {
    return $this->testosteronas;
  }

  function printVyrDuomenys()
  {
    echo "<h2> Vyro ugis: <br>$this->ugis </h2>";
    echo "<h2> Vyro turtas: <br>$this->turtas <h2>";
    echo " <h2> Vyras valge:<br>" . $this->getPusrytis() . "</h2> ";
  }
}

// UZDUOTIS 0.
// susikurti objekta VYRAS

$vyras = new vyras();
// 1. pakeicia 'testosterono' kieki
$vyras->setTestosteronas(4222);
// 2. isveda 'testosrerono' kieki
echo $vyras->getTestosteronas();
//ARBA
// $testoronas = $vyras->getTestosteronas();
// echo $testoronas;


// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:

// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
echo $vyras->printVyrDuomenys();


