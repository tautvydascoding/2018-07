<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- resposive design reikalingas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
         <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="css/normalize.css">
        <!-- !!!! mano CSS failas visas patas zemiausias -->
        <link rel="stylesheet" href="css/master.css?ver=1.0">

        <!-- NOTE: jeigu neveikia:
        1) ar failo pavadinimas geras
        2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
        3) ar   rel="stylesheet"
        4) ar link gale uzdalete ">"
        5) ar tuo adresu nuejai internete (pvz: ar ne praeitos dienos projektas)
    -->
    </head>
    <body>
        <div class="container   ">

            <h1> Isijunk Inspect->console </h1>

<?php
// uzduotis2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
    include_once('db_functions.php');
    $gydyt4 = getDoctor(4);
    // pasitikrinimas:
    // print_r(  $gydyt4);


// uzduotis3: atspausdinti visus gydytojus , kaip list item "ul li"
echo "<ul>";
for ($i=1; $i < 6; $i++) {
    $gydyt = getDoctor($i);
    echo "<li>
            <a href='template-doctor.php?nr=$gydyt[id]&vardas=tomas'>  $gydyt[name]   $gydyt[lname]   </a>
         </li>";
}
echo "</ul>";

// uzduotis4: patobulinti 'uzduotis3',
    // kad paspaudus ant gydytojo vardo/pavardes   atidarytu doctor.php faila
// uzduotis5: patobulinti uzduotis4,
    // kad   doctor.php faile isvestu info apie - paspausta gydytoja

// 2.



 ?>


<!-- <ul>
    <?php    for ($i=1; $i < 6; $i++) :
        $gydyt = getDoctor($i);
        ?>
        <li>
            <a href="template-doctor.php?nr=<?php        echo   $gydyt['id']; ?>">
                    <? echo  $gydyt['name'] . $gydyt['lname']  ?>
             </a>
        </li>
    <?php   endfor; ?>
</ul> -->





        </div> <!--  end Container-->









                <!--  =================================== -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias; visada failo -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
