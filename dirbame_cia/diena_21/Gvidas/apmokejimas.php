<?php
include_once ('header.php');
 ?>
        <div class="container">
            <?php
            include_once ('top-navbar.php');
            include_once ('db-prekiu-info.php');
             ?>
             <?php
             if ($_GET['apmokejimas']) {
                $prekesInfo = getPreke($_GET['apmokejimas']);
            } else {
                $prekesInfo = $_GET['prekesid'];
            }
             // $prekesInfo = getPreke($_GET['apmokejimas']);
             ?>
             <main class="row">
                  <div class="col-md-9">
                      <form id='apmokejimas-forma' action="apmokejimas-forma.php" method="get">
                          <input type="hidden" name="id" value="<?php echo NULL ?>">
                          <div class="form-group">
                              <input type="text" name="vardas" value="" placeholder="Vardenis" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="text" name="pavarde" value="" placeholder="Pavardenis" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="email" name="elpastas" value="" placeholder="El. pastas" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="text" name="adresas" value="" placeholder="Adresas" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="text" name="pastokodas" value="" placeholder="Pasto kodas" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="text" name="telefonas" value="" placeholder="Telefono numeris (+3706XXXXXXX)" class="form-control">
                          </div>
                          <div class="form-group">
                              <textarea name="papildoma" rows="4" class="form-control" placeholder="Papildoma informacija (Neprivaloma)"></textarea>
                          </div>
                          <div class="form-group">
                              <input type="hidden" name="prekesid" value="<?php echo $prekesInfo['id']; ?>" required>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block" target="_blank">Moketi</button>
                          </div>
                      </form>
                  </div>
                  <div class="col-md">
                    <h2>Jusu uzsakoma preke</h2>
                    <h4>Pavadinimas:</h4>
                    <h4><?php echo $prekesInfo['name'] ?></h4>
                    <h4>Kaina: <?php echo $prekesInfo['price'] ?> Eurai</h4>
                  </div>
                <?php
                if (isset($_GET['vardas'])) {
                    $sukurti = createApmokejimas($_GET['id'], $_GET['vardas'], $_GET['pavarde'], $_GET['elpastas'], $_GET['adresas'], $_GET['pastokodas'], $_GET['telefonas'], $_GET['papildoma'], $_GET['prekesid'], 0);
                    // echo "<META http-equiv='refresh' content='1;URL=profile.php'> ";
                }
                 ?>
             </main>
        </div>
        <?php
        include_once('footer.php');
         ?>
