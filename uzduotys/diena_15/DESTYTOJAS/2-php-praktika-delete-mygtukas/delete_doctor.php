<?php

    require_once('./libs/doctors_db.php'); echo "<br>";

     $nr =  $_GET['numeris']; // globalus masyvas
    // print_r( $_GET );

    deleteDoctor( $nr );
    echo "Gydytojas istrintas sekmingai <br>";
