<?php
// PASIZIURETI KAS YRA PHP, js "Switch"



// UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"
    $masina = "opel";
    switch ($masina) {
        case 'audi':
            echo "Susimastykite apie variklio prieziura";
            break;
        case 'BMW':
            echo "Susimastykite apie greiti ir vairavimo kultura";
            break;
        case 'opel':
            echo "Susimastykite apie naujus priedus";
            break;

        default:
            echo "Tokio masinos duomenu neturime... Prasome pabandyti kita automobilio modeli";
            break;
    }
 ?>
