            <?php
                require_once('./docotrs_db.php');
                // pasitestavimui


                for ($i=1; $i < 7; $i++) {
                    $gydytojas = getDoctor( $i ); // is DB gavome mysql objekta
                    $gydytojas = mysqli_fetch_assoc( $gydytojas ); // mysql objekta verciam i masyva

                    include('./doctor-line.php');
                } 

             ?>
             
             
             <!--  kitas failas doc-line.php -->
             <section class="row">
                <div class="col-md-6   bg-warning aukstis-100">
                    <?php  echo "<h2>" . $gydytojas['name']. "</h2>";  ?>
                </div>
                <div class="col-md-6   bg-danger aukstis-100">
                    <?php  echo "<h2>" . $gydytojas['lname']. "</h2>"; ?>
                </div>
            </section>
