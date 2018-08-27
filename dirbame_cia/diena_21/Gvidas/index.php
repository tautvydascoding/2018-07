<?php
include_once('header.php');
 ?>
        <div class="container">
            <?php
            include_once('top-navbar.php');
            ?>
            <main class="row">
                <div class="col-md-12">
                    <!-- karuseles pradzia -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/foto-1.jpg" alt="Pirma nuotrauka">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/foto-2.jpg" alt="Antra nuotrauka">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/foto-3.jpg" alt="Trecia nuotrauka">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Atgal</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Kitas</span>
                        </a>
                    </div>
                    <!-- karuseles pabaiga -->
                    <form action="search.php" method="POST" class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-10">
                              <input class="form-control form-control-lg" type="text" placeholder="Ieskomos prekes pavadinimas" name="ieskomaPreke" autofocus>
                          </div>
                          <div class="col-md">
                              <input type="submit" value="ieskoti" class="btn btn-lg btn-primary btn-block">
                          </div>
                        </div>
                        <!-- <input type="text" name="ieskomaPreke" autofocus/> -->
                    </form>
                </div>

            </main>
        </div>

        <?php
        include_once('footer.php');
         ?>
