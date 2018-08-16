isvesti daktaro info: vardas , pavarda, nr





            <?php
                require_once('./docotrs_db.php');
                // pasitestavimui
                // deleteDoctor(13);

                $gydytojas = getDoctor(1); // is DB gavome mysql objekta
                $gydytojas = mysqli_fetch_assoc( $gydytojas ); // mysql objekta verciam i masyva
             ?>

             <section class="row">
                 <div class="col-md-6   bg-warning aukstis-100">
                     <?php  echo "<h2>" . $gydytojas['name']. "</h2>";  ?>
                 </div>
                 <div class="col-md-6   bg-danger aukstis-100">
                     <?php  echo "<h2>" . $gydytojas['lname']. "</h2>"; ?>
                 </div>
             </section>

             <?php
                 $gydytojas22 = getDoctor(2); // is DB gavome mysql objekta
                 $gydytojas22 = mysqli_fetch_assoc( $gydytojas22 ); // mysql objekta verciam i masyva
             ?>
             <section class="row">
                 <div class="col-md-6   bg-warning aukstis-100">
                     <?php  echo "<h2>" . $gydytojas22['name']. "</h2>";  ?>
                 </div>
                 <div class="col-md-6   bg-danger aukstis-100">
                     <?php  echo "<h2>" . $gydytojas22['lname']. "</h2>"; ?>
                 </div>
             </section>