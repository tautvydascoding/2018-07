<?php

// UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris papildomai turi: estrogenai  = 3450 (public)
// vyras papildomai turi: testosteronai = 9980 (public)

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono skaicius


//
class Zmogus {
     public $ugis = 150;
     protected $svoris = 90;
     private $pinigai = 10000;
     public function getPinigai() {
         return $this->pinigai;  // this , nes pinigai yra kitam scope / islipti is f-jos
     }
}
// extends Zmogus - moteris paveldi public ir protected "Zmogaus" kintamuosius
class Moteris extends Zmogus {


     public $estrogenai = 3450;
     public function getSvoris () {
         return $this->svoris;
     }
}
class Vyras extends Zmogus {
     public $testosteronai = 9980;
     public function getSvoris () {
         return $this->svoris;
     }
}

$Monika = new Moteris();
$Tadas = new Vyras();
$Tadas->graziaiPiesti();

echo "Monikos dienorastis: <br>";
echo $Monika->ugis . " " . $Monika->getSvoris();
echo $Monika->getPinigai();



//
