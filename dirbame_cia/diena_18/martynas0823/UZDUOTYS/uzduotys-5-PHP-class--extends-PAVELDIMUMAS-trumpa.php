<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;
}

// UZDUOTIS 0.
// susikurti objekta VYRAS

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
