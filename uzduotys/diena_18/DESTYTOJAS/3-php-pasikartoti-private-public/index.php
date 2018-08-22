<?php

 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"
 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje)

class A {
    private $name = "Tomas";  // nepaveldimas

    public $plaukuSpalva = "purple";
    protected $sirdiesYda = "nera";

    public function getName() {
        return $this->name;
    }
}

class B extends A {
    // kadangi paveldime "$sirdiesYda", todel ji pasiekiam "B" klaseje su "$this->sirdiesYda"

    public function printSirdiesYda() {
        echo  $this->sirdiesYda ;
    }
}
$objektas = new B();
echo $objektas->plaukuSpalva . " <br>"; // purple

// echo $objektas->name . " <br>";    // ERROR, B klase apie "name" nieko nezino (nes ji privatus) Note: spendimas, A klaseje susikurti f-ja kur igrazina ta f-ja

// $x =  $objektas->getName(); // TOmas
// echo $x;
//
// $objektas->printSirdiesYda();
 
//



//
