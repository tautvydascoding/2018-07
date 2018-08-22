<?php

include_once("db_functions_CRUD.php");

$nr = $_GET['nr'];


$gydytojas = getDoctor($nr);
// if (isset($_GET['nr'])) {
//   $nr = $_GET['nr'];
//   getDoctor($nr);

// }


?>

<h1>Gydytojo nr:  <?php echo $gydytojas['id'] ?> </h1>
<h2>Gydytojo vardas: <?php echo $gydytojas['name'] ?></h2>
<h2>Gydytojo pavarde: <?php echo $gydytojas['lname'] ?></h2>


