<?php 

$meniu = ["home", "about", "gallery", "contact", "vblog"];
// print_r ($meniu);
// echo $meniu;

echo '<ul>';

for ($i = 0; $i < count($meniu); $i++) {
  echo "<li>" . $meniu[$i] . "</li>";
}

echo '</ul>';

?>