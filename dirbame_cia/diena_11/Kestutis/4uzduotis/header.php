<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- resposive design reikalingas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">

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

  <?php
$meniu = array("home", "about", "gallery", "contact", "blog");

?>

<ul>
  <li><?php echo $meniu[0]; ?> </li>
  <li><?php echo $meniu[1]; ?> </li>
  <li><?php echo $meniu[2]; ?> </li>
  <li><?php echo $meniu[3]; ?> </li>
  <li><?php echo $meniu[4]; ?> </li>
</ul>

<?php /*for ($i=0; $i < 5; $i++) {
          echo $meniu[i];*/
    echo "<ul>";


          foreach ($meniu as $value) {

            echo "<li> $value </p> </li>";
          }
    echo "</ul>";


$TIK = array("pirmaNuotrauka", "antraNuotrauka", "treciaNuotrauka", "ketvirtaNuotrauka", "penktaNuotrauka");

        for ($i=0; $i < TIKlength ; $i++) {
          $nuotrauka = $TIK[$i];
        /*echo  "<img src="./img/"$nuotrauka".jpg" alt="viena is nuotrauku />"  ;*/
      echo  "<img src="./img/<?php echo $nuotrauka ?>" alt=''>";
        }

 ?>
