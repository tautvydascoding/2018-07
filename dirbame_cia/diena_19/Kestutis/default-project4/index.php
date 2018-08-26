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

        <h1> Isijunk Inspect->console </h1>
        <div class="container   ">
<?php

// UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

// class A {
//   public $name = "Antanas";
//   protected $plaukuSpalva = "Geltona";
//   private $sirdiesYda = "negalavimas";
// }

//?
  // sukurti interface 'Z'
  // kuris turi f-jas:
  //   setSvoris($x)
  //   getSvoris()


/**
 *
 */
// interface Z
// {
//   public function setSvoris($x);
//   public function getSvoris();
// }

// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100

// class A implements Z {
//   public $svoris = "100";
// }

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

// UZDUOTIS 3:
// susikurti objekta klases A

// $objA = new A();

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

// echo $objA->svoris;

//---------------------------------------------------------

// uzduotis:
    // 1) sukurti interface "Edit" :
    //  1.1) kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // changeName($a)
        // getName()
        // isLogin()

  interface Edit  {
    public function changeName($a);
    public function getName();
    public function isLogin();
  }
  // 2) sukurti (abstrakcia) klase "User" :
          // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
          // A) sukurti kintamuosius:
              // name, password , createdDate, lastLogin
          // B) abstrakti funkcija "Loguot()"
          // C) NE abstrakti funkcija clearlastLoginTime()

 abstract class User {

  public $name = "Jurgis";
  public $password = "Palme";
  public $createdDate = 1999;
  public $lastLogin = 2018;
  abstract function Loguot();
    // komentaras

  function clearlastLoginTime() {
    // kodas
  }
}

// 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)



// class Admin implements Edit {
//   public function changeName($a)
//     {
//         $a->"Birute";
//     }
//
//     public function getName()
//       {
//           $this->"Juozukas";
//       }
//       public function isLogin()
//         {
//             $this->"Petriukas";
//         }
//
//
// }



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
