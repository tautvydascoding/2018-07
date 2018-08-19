<?php

require_once( 'libs/doctors_db.php');

print_r( $_GET );

$vardenis = $_GET['vardas'];
$pavardenis = $_GET['pavarde']; 

createDoctor($vardenis, $pavardenis);
