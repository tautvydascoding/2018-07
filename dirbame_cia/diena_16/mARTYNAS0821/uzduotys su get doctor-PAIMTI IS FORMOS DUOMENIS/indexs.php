<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php

include_once("db_functions_CRUD.php");

?>


<form action="registracija.php" method="GET">
      <h2> Registracija </h2>
  <label for="vardas"> Jusu vardas:</label>
  <input type="text" name="vardas">

  <label for="pavarde">Jusu pavarde:</label>
  <input type="text" name="pavarde">

  <button type="submit">Registruotis</button> <br>

  <h2>Visi Gydytojai:</h2>

<table>
<tr>
  <th>id</th>
  <th>Name</th>
  <th>Last name</th>
</tr>


<?php
while ($gydytojas) {
  echo "<tr>";
  echo " <th> $gydytojas[id] </th> ";
  echo " <th> $gydytojas[lname] </th>";
  echo " <th> <a href=template-doctor.php?nr=$gydytojas[id]> $gydytojas[name] </a></th>";
  echo "<th> <a href=delete-doctor.php?nr=$gydytojas[id]>trinti</a> </th>";
  echo "</tr>";

  $gydytojas = mysqli_fetch_assoc($visiGydytojai);
}



?>

</table>




</form>
  
</body>
</html>