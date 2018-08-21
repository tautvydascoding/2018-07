<?php

require_once("db_function_patients.php");

$numeris = $_GET['nr'];

$pacientas = getPatient($numeris)
?>

<div>

<h1> Paciento Nr: <?php echo "$pacientas[id]" ?> duomenys. </h1>

<table>
  <tr>
    <th>VARDAS:</th>
    <th>PAVARDE:</th>
    <th>GYDYTOJO NUMERIS:</th>
  </tr>
   <th><?php echo "$pacientas[name]" ?> </th>
   <th><?php echo "$pacientas[lname]" ?> </th>
   <th><?php echo "$pacientas[doctor_id]" ?> </th>

</table>





</div>


