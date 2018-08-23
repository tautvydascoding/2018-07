<?php

class zmogus
{
  private $vardas = "vardaas ";
  private $ugis = 0;
  private $alga = 19999;
  private $auto = "BMW";
  //paima ugi
  public function getUgis()
  {
    return $this->ugis;
  }
  //paimga varda
  public function getVardas()
  {
    return $this->vardas;
  }
  public function getAlga()
  {
    return $this->alga;
  }
  public function getAuto()
  {
    return $this->auto;
  }
// sukuria nauja varda
  public function setVardas($newVardas)
  {
    $this->vardas = $newVardas;
  }
  // sukuria nauja ugi
  public function setUgis($newUgis)
  {
    $this->ugis = $newUgis;
  }
  // sukuria nauja alga

  public function setAlga($newAlga)
  {
    $this->alga = $newAlga;
  }
// sukuria nauja masina
  public function setAuto($newAuto)
  {
    $this->auto = $newAuto;
  }

}

$leonidas = new zmogus();

$ugis = $leonidas->getUgis();

echo " Leonido ugis yra: $ugis";


// echo $leonidas->vardas; // fatal erroras, nes privat info. REIKIA EITI PER FUNKCIJA:

$pavadinimas = $leonidas->getVardas();

echo " <br>Objekto pavadinimas:  $pavadinimas";

// vardo pakeitimas
$leonidas->setVardas("Mykolas");

// naujo vardo gavimas
$naujsvards = $leonidas->getVardas();

echo " <br>Leonido OBJEKTO naujas vardas:$naujsvards ";


//ugio pakeitimas

$leonidas->setUgis(1.99);

$naujUgis = $leonidas->getUgis();

echo "<br>Naujas objekto ugis yra:$naujUgis";

// algos gavimas
$alga = $leonidas->getAlga();

echo "<br>Objekto alga: $alga";

//algos pakeitimas

$leonidas->setAlga(200000);

$newAlga = $leonidas->getAlga();

echo "<br> Nauja objekto alga:$newAlga ";

// auto gavimas

$auto = $leonidas->getAuto();
echo "<br>dabar Objekto auto yra $auto";

//auto keitimas
$leonidas->setAuto("FERARI");
$naujaAuto = $leonidas->getAuto();
echo "<br>NAUJA OBJEKTO MASINA YRA:$naujaAuto";