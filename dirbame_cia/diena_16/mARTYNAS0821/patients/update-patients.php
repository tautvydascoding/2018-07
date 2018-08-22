<?php

require_once("db_function_patients.php");

$numeris = $_GET['nr'];

$pacientas = getPatient($numeris);

// echo "$pacientas[name]"
// updatePacient($nr, $vardas, $pavarde, $gydNr)
?>

<h1>Atnaujinkite paciento duomenis:</h1>

<form action="indexs.php" method="GET">

<label for="id"> Jusu numeris/id:</label>
<input type="number" name="id" value=<?php echo "$pacientas[id]" ?>>

<label for="name"> Jusu vardas:</label>
<input type="text" name="name" value=<?php echo "$pacientas[name]" ?>>


<label for="last name"> Jusu pavarde:</label>
<input type="text" name="lname" value=<?php echo "$pacientas[lname]" ?>>

<label for="gydNr">Norimo gydytojo Nr:</label>
<input type="text" name="doctor_id" value=<?php echo "$pacientas[doctor_id]" ?>>

<button type="submit">Keisti duomenis</button>
</form>