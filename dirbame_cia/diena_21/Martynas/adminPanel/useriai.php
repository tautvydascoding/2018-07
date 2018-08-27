
<?php
include("Aheader.php")
?>



<h2 class='mainh2'>Uzsiregistrave Useriai:</h2>
<table class='soc_table'>
  <tr>
    <th><u>Userio id</u></th>
    <th><u>Userio vardas</u></th>
    <th><u>Userio pavarde</u></th>
    <th><u>Userio el.pasto adresas</u></th>
    <th><u>Userio nickas</u></th>
    <th><u>Userio passwordas</u></th>
  </tr>

<?php
$visaData = getAllUsersData();
$data = mysqli_fetch_assoc($visaData);

while ($data) :
  echo "<tr class='table_info'>";
echo " <th> $data[id]</th>";
echo " <th> $data[user_first]</th>";
echo " <th> $data[user_last]</th>";
echo " <th> $data[user_email]</th>";
echo " <th> $data[user_uid]</th>";
echo " <th> $data[user_pwd]</th>";
echo " <th> <a class='btn btn-outline-danger' href='deleteuser.php?nr=$data[id] & title=$data[user_first]'</a> Pasalinti </th>";
// echo " <th> <a class='btn btn-outline-primary' href='update.php?nr=$data[id] & title=$data[vardas]'</a> Naujinti </th>";
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