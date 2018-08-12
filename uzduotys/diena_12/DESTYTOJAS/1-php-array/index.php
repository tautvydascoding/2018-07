<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="./css/main.css">
        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body>

        <h1>Isijunk konsole</h1>

        <?php

        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
        $manoMenu = ["home", "about", "gallery", "contact", "blog"];
        // print_r( $manoMenu ); // pasitestuojame
        ?>

        <nav >
            <ul class="nav navbar">
                <li class="nav-item">
                    <?php echo $manoMenu[0]; ?>
                </li>
                <li class="nav-item">
                    <?php echo $manoMenu[1]; ?>
                </li>
                <li class="nav-item">
                    <?php echo $manoMenu[2]; ?>
                </li>
                <li class="nav-item">
                    <?php echo $manoMenu[3]; ?>
                </li>
                <li class="nav-item">
                    <?php echo $manoMenu[4]; ?>
                </li>
            </ul>
        </nav>


          <!-- ========menu su FOR===== -->
          <!-- // echo  "<li class=\"nav-item\">" ;  // "\" ignoruoja viena, sekanti simboli -->
         <!-- // O kaip atspausdinti "\\" ?   echo "\\\\"; -atspausdins \\ -->
          <nav >
              <ul class="nav navbar">
                 <?php
                    for ($i=0; $i < count( $manoMenu ); $i++) {
                            // echo  "<li class='nav-item'>" ;
                            //             echo $manoMenu[$i];
                            // echo '</li>';
                            // ARBA
                            echo  "<li class='nav-item'>" . $manoMenu[$i] . '</li>';
                    }
                  ?>
              </ul>
          </nav>



        <?php
        // uzduotis 2
        // A. susirasti 6 nuotraukas
        // B. susikurti nuotrauku pavadinimu masyva
        // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
        // <img src='./img/1.jpg' alt=''  />

        // ----sprendimas---
        // 1) pasitesintit ar HMLT img veikai - atvaizduojama
        // <img src="./img/1.jpg" alt="">
        $manoFoto = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
        // print_r(  $manoFoto ); // 2)  tik pasitestinom
        for ($i=0; $i < count($manoFoto) ; $i++) { //
            // pasitestuojame ar veikia
             // echo "<img src='./img/1.jpg' alt=''>";
             echo "<img src='./img/" . $manoFoto[$i] .  "' alt=''>";
             if ( ($i + 1) % 3 === 0) {
                 echo "<br>";
             }
        }


        // uzduotis 3
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        //  Antraste, img pavadinimas, kaina, prekes aprasymas
        // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)

        // sprendimas
        $prekes = [];
        $prekes[0] = ["Dviratis", "1.jpg",  99.99,  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  " ];
        $prekes[1] = ["Paspirtukas", "2.jpg",  199.99,  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  " ];
        $prekes[2] = ["Rieduciai", "3.jpg",  250,  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  " ];
        $prekes[3] = ["Slides", "4.jpg",  50,  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  " ];

        // print_r( $prekes );
        echo "<section class='row'> ";
        for ($i=0; $i < count($prekes); $i++) {
            ?>
            <article class="col-4 bg-info card">
                <h2> <?php echo $prekes[$i][0]; ?>  </h2>
                <img src="./img/<?php echo $prekes[$i][1]; ?>" alt="">
                <p> <?php echo $prekes[$i][3]; ?> </p>
                <a href="#" class="btn btn-lg btn-warning"> <?php echo $prekes[$i][2]; ?> </a>
            </article>

            <?php
        }
        echo "</section>";

           // 3 budai
            // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
            // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


             

         ?>









        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
