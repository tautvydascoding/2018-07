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
        <div class="container-fluid">
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
            if (isset($_GET['name'])) {
                $atnaujinti = uzsakymasUpdate($_GET['id'], $_GET['name'], $_GET['lname'], $_GET['email'], $_GET['address'], $_GET['postalcode'], $_GET['phone'], $_GET['comments'], $_GET['prekesid'], $_GET['patvirtinta']);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai paredagavote uzsakyma (Puslapis automatiskai persikraus uz <span id='counter1'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='1;URL=uzsakymai.php'> ";
            }
            if (isset($_GET['delete'])) {
                $istrinti = deleteUzsakymas($_GET['delete']);
                echo "<div class='alert alert-success' role='alert'>";
                echo "Sekmingai pasalinote uzsakyma (Puslapis automatiskai persikraus uz <span id='counter1'>5</span>sec)";
                echo "</div>";
                // echo "<META http-equiv='refresh' content='1;URL=uzsakymai.php'> ";
            }
             ?>
            <div class="row">
              <div class="col-md-12 bg-info">
                  <table class="table">
                      <tr>
                          <th scope="col">Uzsakymo ID (Numeris)</th>
                          <th scope="col">Pirkejo vardas</th>
                          <th scope="col">Pirkejo pavarde</th>
                          <th scope="col">Email adresas</th>
                          <th scope="col">Adresas</th>
                          <th scope="col">pasto kodas</th>
                          <th scope="col">Telefonai</th>
                          <th scope="col">Papaildomi komentarai</th>
                          <th scope="col">Prekia (kuria isigyjo ID)</th>
                          <!-- <th scope="col">Busena</th> -->
                      </tr>
                      <?php
                      $rezultatai = getUzsakymai();
                      $uzsakymas = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($uzsakymas) {
                          echo "<tr>";
                          echo "<th>$uzsakymas[id]</th>";
                          echo "<th>$uzsakymas[name]</th>";
                          echo "<th>$uzsakymas[lname]</th>";
                          echo "<th>$uzsakymas[email]</th>";
                          echo "<th>$uzsakymas[address]</th>";
                          echo "<th>$uzsakymas[postalcode]</th>";
                          echo "<th>$uzsakymas[phone]</th>";
                          echo "<th>$uzsakymas[comments]</th>";
                          echo "<th>$uzsakymas[prekesid]</th>";
                          // echo "<th>$uzsakymas[patvirtinta]</th>";
                          echo "<th><a href='#edit$uzsakymas[id]' id='link' data-toggle='modal' class='btn-block'><button type='submit' class='btn btn-primary' >EDIT</button></a></th>";
                          echo "<th><a href='?delete=$uzsakymas[id]'<button type='submit' class='btn btn-primary'>DELETE</button></a></th>";
                          include ('modal-uzsakymai.php');
                          echo "</tr>";
                          $uzsakymas = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
                      }
                      ?>
                  </table>
              </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        </body>
    </html>
