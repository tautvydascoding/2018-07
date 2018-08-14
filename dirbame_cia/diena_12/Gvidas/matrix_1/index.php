<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="libs/css/bootstrap.css">
    </head>
    <body>

        <?php
        // UZDUOTIS 1.0
        // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
        // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
        // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
        // D. sukurti masyva 'visiDarbuotojai'
        // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus

        $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
        $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
        $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
        $visiDarbuotojai = [$darbuotojas1 , $darbuotojas2 , $darbuotojas3];

        // UZDUOTIS 1.1
        // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

        for ($i=0; $i < count($darbuotojas1) ; $i++) {
            echo "Pirmo darbuotojo informacija: ".$darbuotojas1[$i]."<br>";
        }

        // UZDUOTIS 1.2
        // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

        for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
            echo "Darbuotoju vardai: ".$visiDarbuotojai[$i][0]."<br>";
        }



         ?>
         <table>
             <?php
             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

             for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
                 echo "<tr>";
                 echo "<th>".$visiDarbuotojai[0][$i]."</th><th>".$visiDarbuotojai[1][$i]."</th><th>".$visiDarbuotojai[2][$i]."</th>";
                 echo "</tr>";
             }

              ?>
         </table>

         <?php
         // UZDUOTIS 1.4
         // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

         for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
             for ($k=0; $k < count($darbuotojas1) ; $k++) {
                 echo $visiDarbuotojai[$i][$k]." ";

             }

             echo "<br>";
         }



         // UZDUOTIS 2 --------------
         // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
         // Antraste, img pavadinimas, kaina, prekes aprasymas

         // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
         // B. i masyva visosPrekes, ideti "preke" masyva
         // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
          ?>
          <div class="container">
              <?php
              $preke1 = ["Preke1", "preke1.png", 20, "Prekes1 aprasymas1"];
              $preke2 = ["Preke2", "preke2.png", 50, "Prekes2 aprasymas2"];
              $preke3 = ["Preke3", "preke3.png", 13, "Prekes3 aprasymas3"];
              $preke4 = ["Preke4", "preke4.png", 66, "Prekes4 aprasymas4"];
              $visosPrekes = [$preke1, $preke2, $preke3, $preke4];


              // for ($i=0; $i < count($visosPrekes) ; $i++) {
              //     for ($k=0; $k < count($preke1) ; $k++) {
              //
              //         echo $visosPrekes[$i][$k]." ";
              //     }
              //     if ($i % 2 === 1) {
              //         echo "<br>";
              //     }
              // }

              for ($i=0; $i < count($visosPrekes) ; $i++) {
                  echo $visosPrekes[0][$i]." ";

                  // if ($i % 2 === 1) {
                  //     echo "<br>";
                  // }
              }

              // 3 budai nuotraukoms
               // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
               // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


              ?>
          </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
