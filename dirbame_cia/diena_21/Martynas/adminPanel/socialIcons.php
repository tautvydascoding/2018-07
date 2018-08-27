
<?php
include("Aheader.php");
// include("../db_function.php");
?>



<h2 class='mainh2'> Socialiniu ikoneliu suvestine:</h2>

<h5 class='mainh5'> Iconeles galite pasirinkti is <a href="https://ionicons.com/" target="_blank"> CIA </a> </h5>

<h3 class='mainh3'>Iconeles galite atnaujinti, bei prideti nauja:</h3>
<a class='btn btn-outline-primary btn-upd' href='updateSocicons.php'>NAUJINTI </a>

<a class='btn btn-outline-success btn-crt' href='createSocicons.php'>PRIDETI</a>


<table class='soc_table'>
  <tr>
    <th><u>Socialines ikoneles ID</u></th>
    <th><u>Socialines ikoneles "name"</u></th>
    <th><u>Socialines ikoneles pavadinimas</u></th>
  </tr>

<?php
$visiIconai = getAllSocIcons();
$Iconas = mysqli_fetch_assoc($visiIconai);

while ($Iconas) :
  echo "<tr class='table_info'>";
echo " <th> $Iconas[id] </th>";
echo " <th> $Iconas[name]</th>";
echo " <th> $Iconas[title]</th>";
echo " <th> <a class='btn btn-outline-danger' href='deleteSocialIcon.php?nr=$Iconas[id] & title=$Iconas[title]'</a> Pasalinti </th>";
// echo " <th> <a class='btn btn-outline-primary' href='updateSocicons.php?nr=$Iconas[id] & title=$Iconas[title]'</a> Naujinti </th>";
// echo " <th> <a class='btn btn-outline-success' href='createSocicons.php?nr=$Iconas[id] & title=$Iconas[title]'</a> Prideti </th>";
echo "</tr>";

$Iconas = mysqli_fetch_assoc($visiIconai);
endwhile;
?>

</table>
</div>

<div>











<?php
include("Afooter.php")
?>