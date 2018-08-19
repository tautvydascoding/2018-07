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
// UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php
// C)    index failo cikle (1.3) ideti:
//       include  (' template-item.php');
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti

        include_once('db_functions.php');

        echo "<div class='row'>";
            for ($i=1; $i < 6; $i++) {
                $gydytojas = getDoctor($i);
                include('template-item.php');
            }
        echo "</div>";
?>




        </div> <!--  end Container-->

                <!--  =================================== -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias; visada failo -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
