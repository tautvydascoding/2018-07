<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

 <!-- 1. sukurti index.php -->
 <!-- 2. parasyti PHP koda: -->
<!-- $x = $_GET['tekstas']; -->
 <!-- echo $x; -->
<!-- 3. pasileisti Narsykleje si puslapi -->
<!-- 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti : -->
<!-- ?tekstas=Mano ivestas tekstas -->

<?php


// tikrina visa masyva
if (!empty($_GET)) {
  $x = $_GET['tekstas'];
  echo $x;
}
// tikrina masyvo stalciu, ar nera null reiksme
if (isset($_GET['tekstas'])) {
  $x = $_GET['tekstas'];
  echo $x;
}

// if (is_array($_GET)) {
//   echo "it is array";
// } else {
//   echo "it is not";
// }
// ?>




</body>
</html>