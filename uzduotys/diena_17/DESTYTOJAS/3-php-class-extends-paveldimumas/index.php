<?php


class Zmogus {
    public function sveikintis() {
        echo 'Labas ';
    }
}
class Moteris extends Zmogus {

}
class Vyras extends Zmogus {

}
$Martyna = new Moteris();
$zmogutis = new Zmogus();

$zmogutis->sveikintis();   // "labas"
$Martyna->sveikintis();    // "labas" , nes paveldint - prieinama prie "public" ir "protected" kintamuju ir f-ju










///
