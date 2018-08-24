<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()'

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Atspasudinti varda ir ugi
// paleisti f-ja 'einu()'

/**
 *
 */
class zmogus
{
    public $vardas = 'vardas';
    public $ugis = 'Ugis';

    function einu()
    {
        // echo $this -> vardas;
        // echo $this -> ugis;
    }
}

$monika = new zmogus();
$monika -> vardas = 'Monika';
$monika -> ugis = 120;
echo $monika -> vardas;
echo $monika -> ugis;
$monika -> einu();

$tadas = new zmogus();
$tadas -> vardas = 'Tadas';
$tadas -> ugis = 140;
echo $tadas -> vardas;
echo $tadas -> ugis;
