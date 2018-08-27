<?php
include("interface.php");
// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'
class A implements Z
{
  public $svoris = 100;
  function setSvoris($svoris)
  {
    $this->svoris = $svoris;
  }
  function getSvoris()
  {
    return $this->svoris;

  }
}

// UZDUOTIS 3:
// susikurti objekta klases A
$abj = new A();

// UZDUOTIS 3.2:
// 1. atspausdinti svori
echo $abj->svoris . "<br>";
// 2. pakeisti svori i 90
$abj->setSvoris(90);
// 3. atspausdinti svori
echo " naujas svoris:" . $abj->getSvoris();


