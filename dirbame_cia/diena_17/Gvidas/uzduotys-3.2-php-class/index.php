<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'manoUgis()'
// public f-ja 'manoVardas()'
// * kintamojo paemimas f-je:    $this->vardas

// UZDUOTIS 2:
// susikurti konstruktoriu
// UZDUOTIS 2.1
// susikurti  objektus: Monika, Tadas

// UZDUOTIS 2.1
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'

/**
 *
 */
class zmogus
{
    private $ugis = '0';
    private $vardas = 'testas';
    public function setManoUgis($x)
    {
        $this->ugis=$x;
    }
    public function setManoVardas($y)
    {
        $this->vardas=$y;
    }
    public function getmanoUgis()
    {
         return $this->ugis;
    }
    public function getmanoVardas()
    {
         return $this->vardas;
    }
}

$monika = new zmogus();
echo $monika -> getmanoUgis();
echo $monika -> getmanoVardas();

$tadas = new zmogus ();
$tadas->setManoUgis('120xm');
$tadas->setManoVardas('Tadas');
echo $tadas->getmanoUgis();
echo $tadas->getmanoVArdas();
