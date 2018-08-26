
<?php
include("Aheader.php")
?>
<?php

$text = $_GET;

if (isset($text['nr'])) {
  $nr = $text['nr'];
  deleteHomeTekstas($nr);
}
echo "<h2> Informacija buvo pasalinta</h2> ";
echo "<META http-equiv='refresh' content='3;URL=hometext.php' > ";

?>




<?php
include("Afooter.php")
?>
