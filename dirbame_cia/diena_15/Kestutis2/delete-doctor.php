<?php




include 'db_functions.php';





function deleteDoctor($nr) {
     $nr = mysqli_real_escape_string(getprisijungimas(), $nr );
     $manoSQL = "DELETE FROM doctors WHERE ID = '$nr'";
     $arIstrynem = mysqli_query(getPrisijungimas(), $manoSQL);
     //  ($arIstrynem == false) {
     //   echo "Error nepavyko istrynti";
     // }
 }

deleteDoctor($_GET['nr']);
