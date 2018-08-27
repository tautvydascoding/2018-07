<?php
include_once ('db-info.php');
include_once ('session.php');
?>
<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-flui">
            <header class="row">
                <div class="col-md-12 pb-2 p-0">
                    <header class="navbar navbar-expand-sm bg-dark navbar-dark">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="profile.php">Visos prekes</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="uzsakymai.php">Uzsakymai</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="klausimai.php">Klausimai</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="images.php">Paveiksliukai</a>
                            </li>
                            <li class="nav-item bg-danger">
                              <a class="nav-link" href="logout.php">Atsijungti</a>
                            </li>
                          </ul>
                    </header>
                </div>
            </header>
            <?php
            if (isset($_GET['sukurtilinkas'])) {
                $sukurti = createImg($_GET['sukurtilinkas'], $_GET['sukurtipozicija'], $_GET['sukurtiprekesid']);
                // echo "<META http-equiv='refresh' content='1;URL=images.php'> ";
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai sukurete nauja paveiksliuka (Puslapis automatiskai persikraus uz <span id='counter2'>5</span>sec)";
                echo "</div>";
            }
            if (isset($_GET['pavadinimas'])) {
                $atnaujinti = imgUpdate($_GET['id'], $_GET['pavadinimas'], $_GET['pozicija'], $_GET['prekesid']);
                // echo "<META http-equiv='refresh' content='1;URL=images.php'> ";
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai atnaujinote paveiksliuka (Puslapis automatiskai persikraus uz <span id='counter2'>5</span>sec)";
                echo "</div>";
            }
            if (isset($_GET['delete'])) {
                $istrinti = deleteImg($_GET['delete']);
                // echo "<META http-equiv='refresh' content='1;URL=images.php'> ";
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai pasalinote paveiksliuka (Puslapis automatiskai persikraus uz <span id='counter2'>5</span>sec)";
                echo "</div>";
            }
             ?>
            <div class="row pt-1 pb-2">
              <div class="col-md-1"></div>
              <div class="col-md-4">
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#create">
                  Sukurti nauja paveiksliuka
                </button>
                <!-- Modal -->
                <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sukurti nauja paveisliuka</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="#" method="get" enctype="multipart/form-data">
                              <input type="text" name="sukurtilinkas" value="" placeholder="Pvz: foto1.jpg">
                              <input type="hidden" name="sukurtipozicija" value="" placeholder="Prekes pozicija">
                              <br>
                              <select class="" name="sukurtiprekesid">
                                  <?php
                                  $rezultatai = getPrekes();
                                  $visosPrekes = mysqli_fetch_assoc($rezultatai);
                                  while ($visosPrekes) {
                                      echo "<option value='$visosPrekes[id]'>$visosPrekes[name]</option>";
                                      $visosPrekes = mysqli_fetch_assoc($rezultatai);
                                  }
                                   ?>
                              </select>
                              <!-- <input type="text" name="sukurtiprekesid" value="" placeholder="Prekesid (prie kurios bus priskirta foto)"><br> -->
                              <button type="submit" class="btn btn-primary">Sukurti</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#upload">
                    Ideti nauja paveiksliuka
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ikelti nauja paveiksliuka</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <button type="submit" class="btn btn-primary" name="submit">Ikelti</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-7"></div>
            </div>
            <div class="row">
              <div class="col-md-12 bg-info">
                  <table class="table">
                      <tr>
                          <th scope="col">Nuotraukos ID (Numeris)</th>
                          <th scope="col">link'as (URL nuorada)</th>
                          <!-- <th scope="col">Pozicija</th> -->
                          <th scope="col">PrekesID (kuriai priskirta nuotrauka)</th>
                      </tr>
                      <?php
                      $rezultatai = getImgs();
                      $img = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($img) {
                          echo "<tr>";
                          echo "<th>$img[id]</th>";
                          echo "<th>$img[name]</th>";
                          // echo "<th>$img[pozicija]</th>";
                          echo "<th>$img[prekesid]</th>";
                          echo "<th><a href='#edit$img[id]' id='link' data-toggle='modal' class='btn-block'><button type='submit' class='btn btn-primary' >EDIT</button></a></th>";
                          echo "<th><a href='?delete=$img[id]'<button type='submit' class='btn btn-primary'>DELETE</button></a></th>";
                          include ('modal-foto.php');
                          echo "</tr>";
                          $img = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
                      }
                      ?>
                  </table>
              </div>
            </div>
            <footer class="row">
                <div class="col-md-12">
                    <!-- <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b> -->
                    <!-- <b id="logout"><a href="logout.php">Atsijungti</a></b> -->
                </div>
            </footer>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
