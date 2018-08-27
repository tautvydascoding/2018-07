<?php



 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)


 //

class A
{
    public $name = 'petras';
    private $plaukuSpalva = 'Zalia';
    protected $sirdiesYda = 'Neturi';
    function getA()
    {
        return $this->plaukuSpalva;
    }
}

class B extends A
{
    function getKintamuosiusA()
    {
        return $this->sirdiesYda;
    }
}

$B = new B();
echo $B->getA();
echo $B->getKintamuosiusA();
echo $B->name;
