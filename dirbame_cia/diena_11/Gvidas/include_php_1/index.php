<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="libs/css/bootstrap.css">
    </head>
    <body>
        <?php
        // Susikurti 2 failus:
        //
        // preke.php
        // index.php
        //
        // Faile index.php naudojant include('kelias'); f-ja "iterpti" preke.php


        // UZDUOTIS:
        // 1: sukurti "preke.php" faila
        // h2 (antraste)
        // p (aprasymas)
        // button (Kaina)
        // 2: paleisti FOR cikla 6 kartus (ideti container ir row)
        // 3) index.php
        // sukurti kintamuosius:
        // $kaina = ...;
        // $antraste = ...;
        // $aprasymas = ...;


        $kaina = "10eur";
        $antraste = "tekstas1";
        $aprasymas = "aprasymas";
        
        echo "<div class='container'>";
        echo "<div class='row'>";
        for ($i=0; $i < 6; $i++) {
            include('preke.php');
        }
        echo "</div>";
        echo "</div>";
        ?>
    </body>
</html>
