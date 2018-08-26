<?php

require_once("../db_function.php");

?>

  <div class=" ab_karusele">
    <div class="vidinis">
<?php
$visiCaruselIMG = getAllCaruselIMG();
$caruselImg = mysqli_fetch_assoc($visiCaruselIMG);

while ($caruselImg) :
  echo " <img src='../IMG/aboutUS/carusel/$caruselImg[name]' alt='Undo kolektyvo keliones:balis,krta,kaunas' class='zemesnis' >  ";
$caruselImg = mysqli_fetch_assoc($visiCaruselIMG);
endwhile;
?>
  </div>
    <div class="prev"></div>
    <div class="next"></div>
  </div>
