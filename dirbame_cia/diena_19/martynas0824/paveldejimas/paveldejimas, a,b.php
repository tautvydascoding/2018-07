<?php
 // 1. sukurti dvi klases A ir B
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"
class a
{
  public $vardas = " Tomuks";
  private $plaukuSpalva = "Juodpusine";
  protected $sirdiesYda = "Kraujagysliu Opa";
  function getSpalva()
  {
    return $this->plaukuSpalva;
  }

}
 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

class b extends a
{
  function getYda()
  {
    return $this->sirdiesYda;
  }
}

$obj = new b();

$vardas = $obj->vardas;
echo " <h2> vardas yra: $vardas </h2> <br>";

echo "<br> Sirdies yda: " . $obj->getYda();
$spalva = $obj->getSpalva();
echo "Plauku spalva:" . $spalva;