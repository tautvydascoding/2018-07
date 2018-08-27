
<?php
include("Aheader.php")
?>



<h2 class='mainh2'>Homepage teksto suvestine:</h2>
<h3 class='mainh3'>Galite atnaujinti nauja teksta:</h3>

<a class='btn btn-outline-primary btn-upd' href='updateHometext.php'>Naujinti </a> 
<br>

<table class='soc_table'>
  <tr>
    <th> <u>Homepage teksto ID</u></th>
    <th><u>Homepage teksto title</u></th>
    <th><u>Homepage teksto subtitle</u></th>
  </tr>

<?php
$visiHomeText = getAllHomText();
$hText = mysqli_fetch_assoc($visiHomeText);

while ($hText) :
  echo "<tr class='table_info'>";
echo " <th> $hText[id] </th>";
echo " <th> $hText[Title]</th>";
echo " <th> $hText[Subtitle]</th>";
echo " <th> <a class='btn btn-outline-danger' href='deletehomeText.php?nr=$hText[id]'</a> Pasalinti </th>";

echo "</tr>";

$hText = mysqli_fetch_assoc($visiHomeText);
endwhile;
?>

</table>
</div>

<div>























<?php
include("Afooter.php")
?>