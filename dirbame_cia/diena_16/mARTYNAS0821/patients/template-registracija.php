<?php

require_once("db_function_patients.php");

$pacientas = $_GET;

createPatient($pacientas['name'], $pacientas['lname'], $pacientas['doctor_id']);

echo "<h2>Jusu paciento kortele sukurta sekmingai </h2>";
echo "<META http-equiv='refresh' content='3;URL=indexs.php' > "; 