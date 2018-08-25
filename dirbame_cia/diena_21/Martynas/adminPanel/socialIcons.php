
<?php
include("Aheader.php");
// include("../db_function.php");
?>



<h2 class='mainh2'> Socialiniu ikoneliu suvestine:</h2>
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
echo " <th> <a class='btn btn-outline-danger' href='delete.php?nr=$Iconas[id] & title=$Iconas[title]'</a> Pasalinti </th>";
echo " <th> <a class='btn btn-outline-primary' href='update.php?nr=$Iconas[id] & title=$Iconas[title]'</a> Naujinti </th>";
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