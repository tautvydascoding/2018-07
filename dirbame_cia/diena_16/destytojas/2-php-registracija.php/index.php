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
                $vard = (isset($_POST['vardas']) == true) ?  $_POST['vardas'] : '';
                $pavard = (isset($_POST['pavarde']) == true) ?  $_POST['pavarde'] : '';
                // ---ilgesnis budas----
                 if (isset($_POST['vardas']) == true) {
                     $vard =  $_POST['vardas'] ;
                 } else {
                    $vard = "";
                 }
             ?>
 
            <form   action="#" method="post">
                <input type="text" name="vardas" value="<?php echo $vard; ?>" placeholder="Vardenis" autocomplete="on">
                <input type="text" name="pavarde" value="<?php echo $pavard; ?>" placeholder="Paverdenis" autocomplete="on">
                <input class="btn btn-lg btn-success" type="submit" name="" value="registracija">
            </form>

            <?php
                // print_r( $_POST );
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
