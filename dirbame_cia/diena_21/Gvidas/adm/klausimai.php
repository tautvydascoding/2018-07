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
            if (isset($_GET['delete'])) {
                $istrinti = deleteKlausimas($_GET['delete']);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai pasalinote klausima (Puslapis automatiskai persikraus uz <span id='counter3'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='1;URL=profile.php'> ";
            }
             ?>
              <div class="col-md-7"></div>
            </div>
            <div class="row">
              <div class="col-md-12 bg-info">
                  <table class="table">
                      <tr>
                          <th scope="col">Pranesimo ID (Numeris)</th>
                          <th scope="col">Vardas</th>
                          <th scope="col">Email</th>
                          <th scope="col">Tema</th>
                          <th scope="col">Pranesimas</th>
                      </tr>
                      <?php
                      $rezultatai = getKlausimai();
                      $klausimas = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($klausimas) {
                          echo "<tr>";
                          echo "<th>$klausimas[id]</th>";
                          echo "<th>$klausimas[vardas]</th>";
                          echo "<th>$klausimas[email]</th>";
                          echo "<th>$klausimas[tema]</th>";
                          echo "<th>$klausimas[pranesimas]</th>";
                          echo "<th><a href='?delete=$klausimas[id]'<button type='submit' class='btn btn-primary'>DELETE</button></a></th>";
                          echo "</tr>";
                          $klausimas = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
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
