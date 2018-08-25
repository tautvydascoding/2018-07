
<?php
include("Aheader.php")
?>



<h2 class='mainh2'>karuseles paveiksliuku suvestine:</h2>
<table class='soc_table'>
  <tr>
    <th><u>Karuseles paveiksliuko ID</u></th>
    <th><u>Karuseles paveiksliuko "name"</u></th>
    <th><u>Karuseles paveiksliuko aprasymas</u></th>
  </tr>

<?php
$visiCaruselIMG = getAllCaruselIMG();
$caruselImg = mysqli_fetch_assoc($visiCaruselIMG);

while ($caruselImg) :
  echo "<tr class='table_info'>";
echo " <th> $caruselImg[id] </th>";
echo " <th> $caruselImg[name]</th>";
echo " <th> $caruselImg[article]</th>";
echo " <th> <a class='btn btn-outline-danger' href='validation.php?nr=$caruselImg[id] & name=$caruselImg[name]'</a> Pasalinti </th>";
echo " <th> <a class='btn btn-outline-primary' href='update.php?nr=$caruselImg[id] & name=$caruselImg[name]'</a> Naujinti </th>";
echo "</tr>";

$caruselImg = mysqli_fetch_assoc($visiCaruselIMG);
endwhile;
?>

</table>
</div>

<div>



















<?php
include("Afooter.php")
?>