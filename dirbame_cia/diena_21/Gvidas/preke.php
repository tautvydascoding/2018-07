<?php
include_once('header.php');
 ?>
        <div class="container">
            <?php
            include_once('top-navbar.php');
             ?>
            <main class="row">
                <?php
                include_once('left-navbar.php');
                include_once('prekiu-info.php');
                include_once('db-prekiu-info.php');
                $preke1 = getPreke($_GET["id"]);
                $fotos = getImgs1($_GET["id"]);
                ?>
                <div class="col-md">
                    <div class="row">
                      <div class="col-md-6">
                          <!-- karuseles pradzia -->
                          <div id="nuotraukos" class="carousel slide slider-atstumimas" data-ride="carousel">
                              <div class="carousel-inner">
                                  <?php
                                  $visosFoto = mysqli_fetch_assoc($fotos);
                                  echo "<div class='carousel-item active'>";
                                  echo "<img class='d-block w-100 prekiu-slider' src='image/$visosFoto[name]' alt='Foto'>";
                                  echo "</div>";
                                  while ($visosFoto) {
                                      echo "<div class='carousel-item'>";
                                      echo "<img class='d-block w-100 prekiu-slider' src='image/$visosFoto[name]' alt='Foto'>";
                                      echo "</div>";
                                      $visosFoto = mysqli_fetch_assoc($fotos);
                                      // print_r($visosFoto);
                                  }
                                   ?>
                                  <!-- <div class="carousel-item active">
                                      <img class="d-block w-100 prekiu-slider" src="image/preke1.jpg" alt="Pirma nuotrauka">
                                  </div> -->
                              </div>
                              <a class="carousel-control-prev" href="#nuotraukos" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Atgal</span>
                              </a>
                              <a class="carousel-control-next" href="#nuotraukos" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Kitas</span>
                              </a>
                          </div>
                          <!-- karuseles pabaiga -->
                      </div>
                      <div class="col-md-6 aukstis-400 prekiu-tekstas">
                          <h2><?php echo $preke1['name']; ?></h2>
                          <h4>Kaina: <?php echo $preke1['price']; ?> &euro;</h4>
                          <h6>Kiekis: <?php echo $preke1['kiekis']; ?></h6>
                          <p><?php echo $preke1['aprasymas']; ?></p>
                          <a href="apmokejimas.php?apmokejimas=<?php echo $preke1['id']; ?>">
                              <button class="mygtukas" type="submit" name="apmokejimas"><i class="far fa-money-bill-alt"></i> Pirkti</button>
                          </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 prekiu-parametrai">
                          <h3>Parametrai</h3>
                          <table class="table">
                          <tbody>
                              <?php
                              for ($i=0; $i < count($preke1ParametraiK) ; $i++) {
                                  echo "<tr>";
                                  echo "<th scope='row'>" . $preke1ParametraiK[$i] . "</th>";
                                  echo "<td>" . $preke1ParametraiD[$i] . "</td>";
                                  echo "</tr>";
                              }
                               ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </main>
        </div>

        <?php
        include_once('footer.php');
         ?>
