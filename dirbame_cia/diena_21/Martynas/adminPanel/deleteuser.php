
<?php
include("Aheader.php")
?>
<?php

$lankytojas = $_GET;

if (isset($lankytojas['nr'])) {
  $nr = $lankytojas['nr'];
  deleteUserData($nr);
}
echo "<h2 class='mainh2'> Useris buvo pasalintas</h2> ";
echo "<META http-equiv='refresh' content='5;URL=useriai.php' > ";

?>




<?php
include("Afooter.php")
?>
