<?php
    echo "labas lietuva <br>";
    // die ("Lietuva 3"); po sito toliau neveiks kodas
    print ("labas <br>");

    $x = 10;
    $vardas = "tomas";
    $miestas = "Kaunas";

    echo "Ir mus aplanke $vardas, kuris atvyko is $miestas <br>";

    // switch kaunas vs vilnius vs klaipdeda
    $miestas = "kaunas";
    $miestas = strtolower($miestas); // mazosios raides
    $miestas = trim($miestas); // pasalina tarpus, tab, /n,.... aplink teksta
    switch ($miestas) {
        case 'kaunas':
            echo "Labas kaunieti";
            break;

        case 'klaipdeda':
            echo "labas klaipedieti";
            break;

        case 'vilnius':
            echo "labas vilnieti";
            break;


        default:
            echo "nezinau tokio miesto...";
            break;
    }

 ?>
