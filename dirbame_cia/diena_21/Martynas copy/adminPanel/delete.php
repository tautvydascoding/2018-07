
<?php
include("Aheader.php")
?>
<?php
//-=-==-- HOME TEXT DELETE-=-=-=-=
$HomeText = $_GET;

if (isset($HomeText['nr'])) {
  $nr = $HomeText['nr'];
  deleteHomeTekstas($nr);
  echo "<h2> Tekstas: $HomeText[name] buvo pasalintas</h2> ";
  echo "<META http-equiv='refresh' content='5;URL=indexadmin.php' > ";
}


//-=-==-- LANKYTOJAI DELETE-=-=-=-=

$lankytojas = $_GET;

if (isset($lankytojas['nr'])) {
  $nr = $lankytojas['nr'];
  deleteLankytojoData($nr);
  echo "<h2> Tekstas: $lankytojas[vardas] buvo pasalintas</h2> ";
  echo "<META http-equiv='refresh' content='5;URL=indexadmin.php' > ";
}


//-=-==-- SOCIAL ICONS DELETE-=-=-=-=

$socIconas = $_GET;

if (isset($socIconas['nr'])) {
  $nr = $socIconas['nr'];
  deleteSocIcon($nr);
  echo "<h2> Tekstas: $socIconas[title] buvo pasalintas</h2> ";
  echo "<META http-equiv='refresh' content='5;URL=indexadmin.php' > ";
}


//-=-==-- CARUSEL IMG DELETE-=-=-=-=

$caruselIMG = $_GET;

if (isset($caruselIMG['nr'])) {
  $nr = $caruselIMG['nr'];
  deleteCaruselImg($nr);
  echo "<h2> Tekstas: $caruselIMG[name] buvo pasalintas</h2> ";
  echo "<META http-equiv='refresh' content='5;URL=indexadmin.php' > ";
}

?>









<?php
include("Afooter.php")
?>