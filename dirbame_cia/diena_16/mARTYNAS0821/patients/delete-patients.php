<?php

require_once("db_function_patients.php");

$pacientas = $_GET;

if (isset($pacientas['nr'])) {
  $id = $pacientas['nr'];
  deletePatient($id);
}

echo "<h2> Pacientas, kurio duomenys: <br> VARDAS: $pacientas[name], PAVARDE: $pacientas[lname] ir NUMERIS: $id, katik buvo istrintas.  </h2> ";
echo "<META http-equiv='refresh' content='5;URL=indexs.php' > "; 