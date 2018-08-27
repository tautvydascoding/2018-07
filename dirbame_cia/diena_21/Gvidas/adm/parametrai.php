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
                            <li class="nav-item">
                              <a class="nav-link" href="parametrai.php">Prekiu parametrai</a>
                            </li>
                            <li class="nav-item bg-danger">
                              <a class="nav-link" href="logout.php">Atsijungti</a>
                            </li>
                          </ul>
                    </header>
                </div>
            </header>
            <?php
            if (isset($_GET['sukurtiparametrai'])) {
                $sukurti = createParametras($_GET['sukurtiparametrai'], $_GET['sukurtiduomenys'], $_GET['sukurtiprekesid'], 0);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai sukurete nauja preke (Puslapis automatiskai persikraus uz <span id='counter4'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='5;URL=profile.php'> ";
            }
            if (isset($_GET['parametrai'])) {
                $atnaujinti = parametraiUpdate($_GET['id'], $_GET['parametrai'], $_GET['duomenys'], $_GET['prekesid']);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai atnaujinote duomenis (Puslapis automatiskai persikraus uz <span id='counter4'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='5;URL=profile.php'> ";
            }
            if (isset($_GET['delete'])) {
                $istrinti = deleteParametras($_GET['delete']);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai pasalinote preke (Puslapis automatiskai persikraus uz <span id='counter4'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='5;URL=profile.php'> ";
            }
             ?>
            <div class="row pt-1 pb-2">
              <div class="col-md-1"></div>
              <div class="col-md-4">
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#create">
                  Sukurti nauja parametra
                </button>
                <!-- Modal -->
                <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sukurti nauja parametra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="#" method="get">
                              <input type="text" name="sukurtiparametrai" value="" placeholder="Prekes parametras"><br>
                              <input type="text" name="sukurtiduomenys" value="" placeholder="Prekes duomenys"><br>
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
                              <input type="hidden" name="sukurtipozicija" value="" placeholder="Prekes pozicija">
                              <button type="submit" class="btn btn-primary">Sukurti</button>
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
                          <th scope="col">Prekes parametrai</th>
                          <th scope="col">Prekes duomenys</th>
                          <th scope="col">Prekes ID (kuriai bus priskirta)</th>
                      </tr>
                      <?php
                      $rezultatai = getParametrai();
                      $preke = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($preke) {
                          echo "<tr>";
                          echo "<th>$preke[parametrai]</th>";
                          echo "<th>$preke[Duomenys]</th>";
                          echo "<th>$preke[prekesid]</th>";
                          echo "<th><a href='#edit$preke[id]' id='link' data-toggle='modal' class='btn-block'><button type='submit' class='btn btn-primary' >EDIT</button></a></th>";
                          echo "<th><a href='?delete=$preke[id]'<button type='submit' class='btn btn-primary'>DELETE</button></a></th>";
                          include ('modal-parametrai.php');
                          echo "</tr>";
                          $preke = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
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
