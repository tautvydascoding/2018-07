<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo "Mokysimes Switch"; ?> </title>
    </head>
    <body>

    </body>
</html>

<?php



  // UZDUOTIS
  // paduoti varda ir Jeigu jis lygus:
  // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
  // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
  // "opel" - atspausdinti "Susimastykite apie naujus priedus"

$vardas = "opel";

  switch ( $vardas ) {
      case "audi":
            echo " Susimastykite apie variklio prieziura";
            echo "<br>";
      break;
      case "BMW":
            echo "  Susimastykite apie greiti ir vairavimo kultura";
            echo "<br>";
      break;
      case "opel":
            echo "Susimastykite apie naujus priedus";
            echo "<br>";
      break;

      default:
          echo "Nurodytos masinos neturime";
          echo "<br>";
      break;
  }






  //
