<?php
 // UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'
 // UZDUOTIS 4
 // klaseje 'Gyvunas' sukurti f-jas:
 // public printPusryciai()


 class Gyvunas
 {
     public $svoris = 'Daug sveria<br>';
     private $pusryciai = 'Daug valgo<br>';
     protected $ligos = 'Beveik neserga<br>';
     function printPusryciai()
     {
         echo $this->pusryciai;
     }
 }


 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'
 // UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'
 // UZDUOTIS 3
 // klaseje 'Vilkas' sukurti f-jas:
 // public printLigos()
 // public printPusryciai() // neveiks

 class Vilkas extends Gyvunas
 {
     public $tipas = 'Kazkoks tipas<br>';
     function printLigos()
     {
         echo $this->ligos;
     }
 }

  // UZDUOTIS 2.0:
 // sukurti VILKO OBJEKTA ir
 // pabandyti isvesti visa info apie Vilka:
 // tipas
 // svoris,
 // ligos     // kalida
 // pusryciai // klaida

 $vilkas = new Vilkas;
 echo $vilkas->svoris;
 echo $vilkas->tipas;
 // echo $vilkas->pusryciai; ERROR
 // echo $vilkas->ligos; ERROR
 $vilkas->printLigos();
 $vilkas->printPusryciai();
