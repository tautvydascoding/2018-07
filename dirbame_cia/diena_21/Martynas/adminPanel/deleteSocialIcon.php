
<?php
include("Aheader.php")
?>
<?php

$iconas = $_GET;

if (isset($iconas['nr'])) {
  $nr = $iconas['nr'];
  deleteSocIcon($nr);
}
echo "<h2 class='mainh2'> Informacija buvo pasalinta</h2> ";
echo "<META http-equiv='refresh' content='3;URL=socialIcons.php' > ";

?>




<?php
include("Afooter.php")
?>
