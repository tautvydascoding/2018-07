
<?php
include("Aheader.php")
?>
<?php

$lankytojas = $_GET;

if (isset($lankytojas['nr'])) {
  $nr = $lankytojas['nr'];
  deleteLankytojoData($nr);
}
echo "<h2 class='mainh2'> Informacija buvo pasalinta</h2> ";
echo "<META http-equiv='refresh' content='5;URL=lankytojai.php' > ";

?>




<?php
include("Afooter.php")
?>
