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
              <form>
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputAddress">Telefono numeris</label>
                    <input type="text" class="form-control" id="telefonas" placeholder="+370">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">E-paštas</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="El. paštas">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="idėti vardą">Vardas</label>
                    <input type="text" class="form-control" id="klientoVardas" placeholder="Vardas">
                  </div>

                <div class="form-group col-md-6">
                  <label for="idėti vardą">Pavardė</label>
                  <input type="text" class="form-control" id="klientoPavardė" placeholder="Pavardė">
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Viežbučio pavadinimas</label>
                    <h4 id="Viezbucio pavadinimas"> Viezbucio pavadinimas </h4>
                    <!-- <input type="text" class="form-control" id="Viezbucio pavadinimas"> -->
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Dienų skaičius</label>
                    <select id="inputState" class="form-control">
                      <option selected>Pasirinkite...</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAddress2">Atostogų kaina</label>
                  <input type="text" class="form-control" id="atostoguKaina" placeholder="">
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Sutinku pateikti savo asmeninius duomenis
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Patvirtinti užsakymą</button>
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
