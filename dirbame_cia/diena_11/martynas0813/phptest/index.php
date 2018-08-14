<?php

echo "labas lietuvelewwwwwwww";
// die ("labas, ka tu 12"); // po die daugiau kodas nebeveiks.
// print("labas rytas, ka tu");
echo "tikrinam";




$cardas = "tomas";
$miestas = "kaunas";

echo "ir mus aplanke $vardas , kuris atvyko is $miestas";

echo ' labas $vardas ir ka tu? '; //  ant viengubu kabuciu neveikia kintamieji
 
$miestas = "klaipeda";
$miestas = strtolower($miestas);// mazosios raides
$miestas = trim($miestas); // pasalina tarpus, tab, aplink tavo teksta. Tarpus salina protingus, ne tuos,kur stringe bus sudeti protingai. DEDAMA ANT USERNAME DAZNIAUSIAI  


switch ($miestas) {
case 'kaunas':
echo "kaunas jega <br />";
break;
case 'klaipeda':
echo "klaipedoj jura osia <br />";
break;
case 'vilnius':
echo "vis delto sostine <br />";
break;
default:
echo "nezinau tokio miesto <br />";
};




?>

   <!-- UZDUOTIS  "Switch"
  paduoti varda ir Jeigu jis lygus:
  "audi" - atspausdinti "Susimastykite apie variklio prieziura"
  "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
  "opel" - atspausdinti "Susimastykite apie naujus priedus" -->

<?php
$vardas = "bmw";
$vardas = strtolower($vardas);
$vardas = trim($vardas);

switch ($vardas) {
case 'audi':
echo "Susimastykite apie variklio prieziura";
break;
case 'bmw':
echo "Susimastykite apie greiti ir vairavimo kultura";
break;
case  'opel':
echo "Susimastykite apie naujus priedus";
break;

};




?>

