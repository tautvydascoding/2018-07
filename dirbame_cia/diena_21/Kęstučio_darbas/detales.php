<?php include('header.php') ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

              <?php include('nav.php')?>
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
          <h2 class="display-4">Susisiekite su mumis</h2>
          <p class="lead">Jai turite klausymų mielai į juos atsakysime.</p>
          <hr class="my-4">
          <p>Galime suteikti visą papildomą jus dominančią informaciją apie poilsį kalnuose.</p>
        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h4>Užpildykite trūkstamus laukus.</h4>
              <!-- IDEA: Ikeliu forma -->
              <form action="poApsipirkimo.php" method="post">
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputAddress">Telefono numeris</label>
                    <input type="text" class="form-control" name="telefonas" id="telefonas" placeholder="+370">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">E-paštas</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="El. paštas">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="idėti vardą">Vardas</label>
                    <input type="text" class="form-control" name="vardas" id="klientoVardas" placeholder="Vardas">
                  </div>

                <div class="form-group col-md-6">
                  <label for="idėti pavarde">Pavardė</label>
                  <input type="text" class="form-control" name="pavarde" id="klientoPavardė" placeholder="Pavardė">
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <h4 id="Viezbucio pavadinimas">
                       <h4> <?php echo $_GET['viezb']; ?> </h4>
                  </div>
                <div class="form-group col-md-6">
                    <h4 id="ViezbucioKaina">Atostogų kaina <?php echo  $_GET['kaina']; ?></h4>
                </div>
                <div class="form-group col-md-12">
                  <label for="komentaras" >
                    Čia galite yrašyti savo komentarą.
                  </label>
                  <input type="text" class="form-control" name="komentaras" placeholder="">
                  </div>
                  <div class="form-check col-md-12">
                    <button type="submit" name="submitted" class="btn btn-primary">Patvirtinti užsakymą</button>
                </div>
              </form>
            <!-- IDEA: Užbaigiu forma -->
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
