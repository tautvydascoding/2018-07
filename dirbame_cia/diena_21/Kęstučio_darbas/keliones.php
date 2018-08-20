<?php include ('header.php') ?>

  <div class="container-fluid no-gutters">
    <header class="row meniu">
      <div class="col">

        <!-- IDEA: Meniu -->
        <?php include('nav.php') ?>
        <!-- IDEA: Pabaigem meniu -->

        <div class="float-fix"></div>
        <!-- IDEA: isisvalom float left -->
      </div>
      <!-- IDEA: uzbaigiu headerio col -->
    </header>
  </div>
  <!-- IDEA: uzdarau header kontaineri -->

  <div class="container">
    <main class="row">
      <!-- IDEA: Pradedu Nuotrauku shou -->
      <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade col-10" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/bright-clouds-cold-618833.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/landscape-mountains-nature-67517.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/alps-barn-clouds-358532.jpg" alt="Third slide">
          </div>
        </div>
      </div>
      <!-- IDEA: uzbaigiu nuotrauku shou -->
      <div class="col-md-2 col-sm col-xs align-self-center">
        <h4> Antraste </h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor.</p>
      </div>
      <!-- IDEA: udarau col 3 -->
    </main>
    <!-- IDEA: Isidedu specery -->
    <div class="row aukstis-150">
      <div class="col align-self-end">
        <h2> Šiuo metu siūlome vykti į:</h2>
      </div>
    </div>
    <!-- IDEA: Pabaigiau specery pradedu kelioniu pasirinkima -->
    <div class="row">
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/kalnaiMaza.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Karpatai </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="http://localhost/d/detales.php" id="karpatai" class="btn btn-primary"> Užsisakyti kelionę </a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/bright-clouds-cold-618833.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Kalifornijos kalnai</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="http://localhost/d/detales.php" id="kalifornija" class="btn btn-primary"> Užsisakyti kelionę </a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/landscape-mountains-nature-67517.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Islandijos kalnai</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="http://localhost/d/detales.php" id="islandija" class="btn btn-primary"> Užsisakyti kelionę </a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/alps-barn-clouds-358532.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Alpės </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="http://localhost/d/detales.php" id="alpes" class="btn btn-primary">Užsisakyti kelionę</a>
          </div>
        </div>
      </div>

    </div>
    <!-- IDEA: pasibaigiu kelioniu pristatymo row -->
    <!-- IDEA: Isidedu specery -->
    <div class="row aukstis-100">
      <div class="col">
      </div>
    </div>
    <!-- IDEA: Pabaigiau specery pradedu footer -->
  </div>

  <?php include('footer.php') ?>
