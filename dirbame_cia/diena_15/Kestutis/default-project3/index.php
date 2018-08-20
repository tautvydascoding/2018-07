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

            <!-- <h1> Isijunk Inspect->console </h1>

<form class="" action="registracija.php" method="get">
  <input type="text" name="vardas" value=""><br />
  <input type="text" name="pavarde" value="" autofocus maxlength="30"><br />
  <label for="telefonas"> Jusu telefono numeris </label><br />
  <input type="text" name="telefonas" value="" autocomplete="true" required pattern
   = "+370[0-9]{8}" title="Reik ivesti +370..."><br />
   <textarea name="zinute" rows="8" cols="80"></textarea>
  <button type="submit" name="button"> registruokis </button>
  <input type="submit" name="" value="registracija">
</form>
 -->

<!-- <form class="" action="#" method="get">
  <input type="text" name="adresas" value="">
  <button type="submit" name="button">Siusti</button>
</form>
-->
<?php
$rodytiZinutes = false;
   // $debugMode = 1;

   // konstantos
   define('DB_NAME', "hospital7");
   define('DB_USER', "root");
   define('DB_PASSWORD', "root");
   define('DB_HOST', "localhost");

   $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

   if ( $prisijungimas && $rodytiZinutes ) {
       echo "Prisijungem prie DB: " . DB_NAME . " sekmingai :)";
   } elseif( $rodytiZinutes )  {
       echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error();
   }
   function getPrisijungimas() {
       global $prisijungimas;
       return $prisijungimas;
   }



//--------------end paprasta-----------
    function getDoctorDaug($nr) {
        $manoSQL = "SELECT * FROM doctors WHERE id=$nr ";

        // grista obj !!! ne masyvas
        $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);

        // jei DB-je radome
        if (mysqli_num_rows($rezultatai) > 0) {
            // is "$rezultatai" objekto  paimam duomenis i Array
            $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
            return $resultataiMasyvas;
        } else {
        echo "<div class='bg-danger'> ERRRO: gytytojo nr:" . $nr . " neradome</div> ";
        }

    }




    echo "<div class='row'>";
    echo "<ul>";
               for ($i=2; $i < 6; $i++) {
                   $gydytojas = getDoctorDaug($i);
                    echo "<li>";
                      <a href='templ-doctor.php?nr=$gydyt[id]'> $gydytojas[ 'name' ] $gydytojas[ 'name' ]; </a>
                    echo . "</li>";

               }
echo "</ul>";
   ?>






 </div>









                <!--  =================================== -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- !!! mano js failas pats zemiausias; visada failo -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
