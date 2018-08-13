<?php


    echo "Labas lietuva 1  <br>";
    // die ("Labas lietuva 2");  // po sito nesuveiks joks kodas
    print ("Labas lietuva 3  <br>");

    $x = 10;
    $vardas = "tomas";
    $miestas = "Kaunas";

    // dvigubose tekstu kabutese - veikia kintamieji
    echo "Ir mus aplanke   $vardas, kuris atvyko is $miestas   <br>";
    echo 'Ir mus aplanke   $vardas, kuris atvyko is $miestas   <br>';

    // Switch kaunas vs vilnius vs klaipeda
    $miestas = "    KAUNAS   ";
    $miestas = strtolower($miestas); // mazosios raides
    $miestas = trim($miestas);   // pasalina tarpus, tab, /n, ... aplink  teksta
    switch (  $miestas) {
        case 'kaunas':
            echo "Labas Kaunieti <br />";
            echo "Siandien puikus oras<br />";
            break;
        case 'klaipeda':
            echo "Labas Klaipedieti <br />";
            break;
        case 'vilnius':
            echo "Labas Vilnieti <br />";
            break;
        default:
            echo "nezinau tokio miesto...  <br />";
            break;
    }

 ?>
