<?php
// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';
    function printVyroDuomenys($x, $y, $z)
    {
        echo "Zmogaus ugis: " . $this->ugis=$x . "<br>";
        echo "Zmogaus pusryciai: " . $this->pusryciai=$y . "<br>";
        echo "Zmogaus turtas: " . $this->turtas=$z . "<br>";
    }
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    function getTestosteronas($x)
    {
        echo "Vyro normalus testosteras: " . $this->testosteronas . "<br>";
        echo "Vyro testosteronas(Paredaguotas): " . $this->testosteronas=$x . "<br>";
    }
}

// UZDUOTIS 0.
// susikurti objekta VYRAS
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

$vyras = new Vyras;
$zmogus = new Zmogus;
$vyras->getTestosteronas(1000);
$zmogus->printVyroDuomenys(120, "Uogos", "Didele vila prie kauno mariu");




// seip testuoju password_hash
$pass = "manovardas";
echo "Jusu slazptazodis: $pass ,uzkoduotas slaptazodis: " . password_hash($pass, PASSWORD_DEFAULT);
