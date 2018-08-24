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

require_once("db_function_patients.php");

?>


<div>
  <h1>PACIENTU REGISTRACIJA</h1>
</div>
<br>
<br>
<br>

<form action="template-registracija.php" method="GET">

<label for="name"> Jusu vardas:</label>
<input type="text" name="name">


<label for="last name"> Jusu pavarde:</label>
<input type="text" name="lname">

<label for="gydNr">Norimo gydytojo Nr:</label>
<input type="text" name="doctor_id">

<button type="submit">Registruotis</button>
</form>
<br>
<br>
<br>

<div>
<h1>Pacientu registravimo suvestine:</h1>
<table>
<tr>
  <th>Paciento Id</th>
  <th>Paciento vardas</th>
  <th>Paciento pavarde</th>
  <th> Gydytojo, kuriam priskirtas pacientas Id</th>
</tr>

<?php
while ($pacientas) {
  echo "<tr>";
  echo " <th> <a href='template-patient.php?nr=$pacientas[id]'> $pacientas[id] <a/> </th>";
  echo " <th> $pacientas[name]</th>";
  echo " <th> $pacientas[lname]</th>";
  echo " <th> $pacientas[doctor_id]</th>";
  echo " <th> <a href='delete-patients.php?nr=$pacientas[id] & name=$pacientas[name] & lname=$pacientas[lname] '</a> Pasalinti </th>";
  echo " <th> <a href='update-patients.php?nr=$pacientas[id] & name=$pacientas[name] & lname=$pacientas[lname] '</a> EDIT </th>";
  echo "</tr>";

  $pacientas = mysqli_fetch_assoc($visiPacientai);
}
?>

</table>
</div>

<div>
  <h2>
<?php

$pacientas = $_GET;

print_r($pacientas);

updatePacient(null, $pacientas['name'], $pacientas['lname'], $pacientas['doctor_id']);


?>

  </h2>
</div>
  
</body>
</html>