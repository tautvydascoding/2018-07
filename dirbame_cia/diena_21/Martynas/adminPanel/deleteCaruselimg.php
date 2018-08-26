
<?php
include("Aheader.php")
?>
<?php

$img = $_GET;

if (isset($img['nr'])) {
  $nr = $img['nr'];
  deleteCaruselImg($nr);
}
echo "<h2> Informacija buvo pasalinta</h2> ";
echo "<META http-equiv='refresh' content='3;URL=carusel.php' > ";

?>




<?php
include("Afooter.php")
?>
