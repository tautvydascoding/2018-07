<?php include('header.php') ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

              <?php include('nav.php') ?>
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

              <!-- IDEA: Ikeliu forma -->
              <form action="poKontaktu.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">E-paštas</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="El. paštas">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="idėti vardą">Vardas</label>
                    <input type="text" name="vardas" class="form-control" id="inputVardas" placeholder="Vardas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Adresas</label>
                  <input type="text" name="gyvenamoji" class="form-control" id="inputAddress" placeholder="Jūsų gyvenamoji vieta">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Kalnų kurorto adresas</label>
                  <input type="text" name="kurortas" class="form-control" id="inputAddress2" placeholder="Vietovė kur planuojate vykti">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Miestas</label>
                    <input type="text" name="miestas" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Šalis</label>
                    <input type="text" id="inputState" name="salis" class="form-control">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Pašto kodas</label>
                    <input type="text" name="pKodas" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Sutinku pateikti savo asmeninius duomenis
                    </label>
                  </div>
                </div>
                <button type="submit" name="submitas" class="btn btn-primary">Siūsti</button>
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
