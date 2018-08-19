<?php
    require_once('./libs/doctors_db.php'); echo "<br>";
?>
<div class="container">
    <article class="row p-5">
        <?php
            $gydytojas = getDoctor(1); //  Array ( [id] => 5 [name] => Koris [lname] => Pita )
        ?>
        <div class="col-6 bg-info ">
            <h2>
                <?php echo $gydytojas['id']; ?>
                <?php echo $gydytojas['name']; ?>
            </h2>
        </div>
        <div class="col-6 bg-warning ">
            <h2>
                <?php echo $gydytojas['lname']; ?>
            </h2>
        </div>
        <a href="delete_doctor.php?numeris=<?php   echo $gydytojas['id']; ?>" class="btn btn-danger "> DELETE </a>

        <a href="#?trinti=true&numeris=<?php   echo $gydytojas['id']; ?>" class="btn btn-danger "> DELETE </a>
    </article>
</div>




<?php

if( $_GET['trinti'] == true) {       // trinti=true
    deleteDoctor( $_GET['numeris'] );//  numeris=9
    // http://localhost/diena_16/DESTYTOJAS/2-php-praktika-delete-mygtukas/?trinti=true&numeris=9&action=delete

    //&action=delete
    //&action=edit
    //&action=create
}

 ?>
