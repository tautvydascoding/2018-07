<?php/*

      echo "Labas Lietuva";
      print ("labas Lietuva");
    //  die ("Labas lietuva");

    $vardas = "tomas";

    echo "ir mus aplanke $vardas";

$miestas = "Klaipeda";
$miestas = strtolower($miestas);
$miestas = trim($miestas);

    switch ($miestas) {
      case 'Kaunas':
        echo "labas Kaunieti <br/>";
        break;

        case 'klaipeda':
          echo "labas Klaipeda <br/>";
          break;

          case 'Vilnius':
            echo "labas Vilniau <br/>";
            break;

      default:
        echo "labas Panevezi <br/>";
        break;
    }

    // UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"

$automobilis = "audi";
$automobilis = strtolower($automobilis);
$automobilis = trim($automobilis);

switch ($automobilis) {

    case 'audi':
      echo "Susimastykite apie variklio prieziura";
      break;

    case 'BMW':
      echo "Susimastykite apie greiti ir vairavimo kultura";
      break;

    case 'audi':
      echo "Susimastykite apie naujus priedus";
      break;

  default:
    echo "Nezinomas automobilis";
    break;
}

 $kaina = 45;
 $antraste = "Sportine striuke";
 $aprasymas =  "Ziemine sportine striuke. Skirta slidinejimui.";


  ?>

<div class="container">

<div class="row">

  <?php
  for ($i=0; $i <6 ; $i++) {
   include( 'preke.php' );
 } */


 include('header.php');
 include('main.php');
 include('footer.php');










  ?>
