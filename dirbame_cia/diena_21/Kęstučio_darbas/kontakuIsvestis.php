<?php include('header.php') ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

            <?php

                include('nav.php');
            ?>
         <!-- IDEA: Pabaigem meniu -->

            </div>
            <!-- IDEA: Pabaigiu Header col -->
          </div>
          <!-- IDEA: Pabaigiu Header row -->
        </header>
        <!-- IDEA: Pabaigiau Header konteinerį -->
        <!-- ISJUNGIU meniu FLOAT -->
        <div class="float-fix"> </div>

        <div class="jumbotron">
          <h2 class="display-4"> Kontaktu lentelėje turim tokia informacija </h2>

        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col text-center aukstis-200">
            <p>

              <?php
            $visikontaktai = getKontaktai();

            while ( $kontaktai = mysqli_fetch_assoc($visikontaktai) )
             {
              echo $kontaktai['registracija']." ";
              echo $kontaktai['E-paštas']." ";
              echo $kontaktai['Vardas']." ";
              echo $kontaktai['Adresas']." ";
              echo $kontaktai['Kalnų-kurorto-adresas']." ";
              echo $kontaktai['Miestas']." ";
              echo $kontaktai['Šalis']." ";
              echo $kontaktai['Pašto-kodas']."<br />"; }
              ?>
              </p>
            </div>
            </div>
         </div>
       </div>
      <!-- IDEA: Uzdarom pagrindini puslapio Background col -->
    </div>
    <!-- IDEA: Uzdarom pagrindini Background row -->
  </div>
  <!-- IDEA: Uzdarom pagrindini Background container -->
  <!-- IDEA: Antrste su mygtuku pabaigta -->

  <!-- IDEA: Isidedu specery -->
  <div class="row aukstis-100">
    <div class="col">
    </div>
  </div>
  <!-- IDEA: Pabaigiau specery pradedu footer -->
<!-- IDEA: uzdarau main container -->

<?php include('footer.php') ?>
