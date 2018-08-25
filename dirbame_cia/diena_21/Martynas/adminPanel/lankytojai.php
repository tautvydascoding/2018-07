
<?php
include("Aheader.php")
?>



<h2 class='mainh2'>Lankytoju,kurie kreipesi i UNDO STUDIJA suvestine:</h2>
<table class='soc_table'>
  <tr>
    <th><u>Lankytojo id</u></th>
    <th><u>Lankytojo vardas</u></th>
    <th><u>Lankytojo pavarde</u></th>
    <th><u>Lankytojo el.pasto adresas</u></th>
    <th><u>Lankytojo telefono numeris</u></th>
    <th><u>Lankytojo palikta zinute</u></th>
  </tr>

<?php
$visaData = getAllInfoData();
$data = mysqli_fetch_assoc($visaData);

while ($data) :
  echo "<tr>";
echo " <th> $data[id]</th>";
echo " <th> $data[vardas]</th>";
echo " <th> $data[pavarde]</th>";
echo " <th> $data[el_pastas]</th>";
echo " <th> $data[tel_nr]</th>";
echo " <th> $data[zinute]</th>";
echo " <th> <a class='delete' href='delete.php?nr=$data[id] & title=$data[vardas]'</a> Pasalinti </th>";
echo " <th> <a class='update' href='update.php?nr=$data[id] & title=$data[vardas]'</a> Naujinti </th>";
echo "</tr>";

$data = mysqli_fetch_assoc($visaData);
endwhile;
?>

</table>
</div>

<div>

















<?php
include("Afooter.php")
?>