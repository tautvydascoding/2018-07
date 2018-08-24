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

            <h1> Isijunk </h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<aside class="">
  <h4>Aside antraste</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</aside>


<form class="" action="mail.php" method="post">
  <input type="text" name="vardas" value="kazkokia">
  <input type="email" name="pastas" value="pastas">
  <input type="submit" name="" value="">

</form>

<?php

// mb_send_mail($to, $subject, $message [$additional_headers, $additional_parameters]);

// UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'


class Gyvunas
{
  public $svoris = "60kg<br />";
  private $pusryciai = "antys<br />";
  protected $ligos =  "parazitai<br />";
  public function printPusryciai()
        {
           print $this->pusryciai;
        }

}

// UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'


class Vilkas extends Gyvunas
{
  public $tipas = "Vilkas<br />";

  function getLigos()
     {
         return $this->ligos;
     }
  public function printLigos()
        {
           print $this->ligos;
        }

}

// UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'




// UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // kalida
// pusryciai // klaida

$objVilkas = new Vilkas();
  echo $objVilkas->tipas;
  echo "sveria ". $objVilkas->svoris;
  echo "turi ". $objVilkas->getLigos();
  $objVilkas->printLigos();
  $objVilkas->printPusryciai();
  // echo $objVilkas->pusryciai;

  // UZDUOTIS 3
  // klaseje 'Vilkas' sukurti f-jas:
  // public printLigos()
  // public printPusryciai() // neveiks


  // UZDUOTIS 4
   // klaseje 'Gyvunas' sukurti f-jas:
   // public printPusryciai()



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
