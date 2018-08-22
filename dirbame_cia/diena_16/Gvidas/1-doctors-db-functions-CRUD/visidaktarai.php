<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <?php include_once ('db_functions.php'); ?>
        <div class="container">
            <div class="row">
              <div class="col-md-12 bg-info">
                  <h2>Visi daktarai</h2>
                  <a href='create-doc.php?id=$Gydytojas[id]'<button type='submit' class='btn btn-primary'>SUKURTI NAUJA VARTOTOJA</button></a>
                  <table>
                      <tr>
                          <th>Vardas</th>
                          <th>Pavarde</th>
                          <th></th>
                      </tr>
                      <?php
                      $rezultatai = getDoctors();
                      $Gydytojas = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($Gydytojas) {
                          echo "<tr>";
                          echo "<th>$Gydytojas[name]</th>";
                          echo "<th>$Gydytojas[lname]</th>";
                          echo "<th><a href='update-doc.php?id=$Gydytojas[id]'<button type='submit' class='btn btn-primary'>EDIT</button></th>";
                          echo "<th><a href='delete-doc.php?id=$Gydytojas[id]'<button type='submit' class='btn btn-primary'>DELETE</button></th>";
                          echo "</tr>";
                          $Gydytojas = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
                      }
                      ?>
                  </table>
              </div>
            </div>
        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
