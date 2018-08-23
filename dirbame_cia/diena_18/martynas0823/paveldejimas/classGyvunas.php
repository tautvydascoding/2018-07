<?php
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'
class Gyvunas
{

  public $svoris = 1222;
  private $pusryciai = "Vistos"; // NEPAVELDES
  protected $ligos = "Aklumas";
  public function getPusryciai() // public paveldi su visos funkcijos viduriais
  {
    return $this->pusryciai;
  }

}



