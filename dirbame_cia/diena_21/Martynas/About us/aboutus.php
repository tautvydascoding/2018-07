<?php

require_once("header.php");
$visiTekstai = getAllTekstai();
$tekstas = mysqli_fetch_assoc($visiTekstai);
?>


        <!-- Main container -->
    <div class="container">

        <div class="about_text">

                <div class="row">
                    <div class="col-md-4">
                     <?php echo "<h1 class='abouth1'>$tekstas1[name]</h1>" ?>
                        <br>
                        <p><?php 
                            echo $tekstas1['article'];
                            ?>
                        </p>
                    </div>
                    <div class="col-md-4 ">
                        <img src="../IMG/aboutUS/fists.jpeg" alt="" width="300" height="200" class="borderRadius">

                    </div>


                </div>

                <div class="row">

                    <div class="col-md-4 offset-md-4">
                        <h2><?php echo $tekstas2['name'] ?></h2>
                        <br>
                        <p><?php echo $tekstas2['article'] ?></p>
                    </div>

                    <div class="col-md-4">
                        <img src="../IMG/aboutUS/clap.jpeg" alt="" height="200" width="350" class="borderRadius">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 offset-md-4 ">
                        <img name="slideris" alt="" width="250" height="250" class="borderRadius">

                    </div>

                    <div class="col-md-4 neverStop">
                        <h2><?php echo $tekstas3['name'] ?></h2>
                        <br>
                        <p><?php echo $tekstas3['article'] ?></p>
                    </div>
                </div>



            <div class="row">
               <!-- <div class="col-md-12 aukstis-100"></div> -->
                <div class="col-md-12">
                    <h2 class="laisureh2"> Our laisure time - together! </h2>
                </div>
            </div>

          <?php
            require_once("carusel.php");
            ?>

        </div> <!-- about text div ends here -->







    </div>
        <!--  end of MAIN Container-->
<?php
require_once("footer.php") ?>
