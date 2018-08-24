<?php
 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 class A
 {
     public $name = 'Petras';
     private $plaukuSpalva = 'Juoda';
     protected $sirdiesYda = 'Nera';
     function spaudintuvas()
     {
         return $this->plaukuSpalva;
     }
 }

 class B extends A
 {
     function spausdinam()
     {
         echo $this->name;
         echo $this->sirdiesYda;
     }
 }

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

$b = new B();
$b->spausdinam();
$b->spaudintuvas();
echo $b->spaudintuvas();
