<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php include_once ('db_functions.php');
        ?>
        <p>Kiekeviena forma pildyti po viena ! Po kiekvienos formos uzpildyto paspausti mygtuka atnaujinti !</p>
        <a href="index.php"><button type="submit">ATNAUJINTI</button> </a>
        <a href="visidaktarai.php"><button type="submit">VISI daktarai</button> </a>
        <hr>
        <h2>Daktaro sukurimas</h2>
        <form action="#" method="get">
            <input type="text" name="vardas" value="" placeholder="Vardas">
            <input type="text" name="pavarde" value="" placeholder="Pavarde"><br>
            <button type="submit">Sukurti</button>
        </form>
        <?php
        if (isset($_GET['vardas'])) {
            $sukurti = createDoctor($_GET['vardas'], $_GET['pavarde']);
            echo "Sukurtas vardas: $sukurti <br>";
        }
         ?>
         <hr>
         <h2>Daktaro duomenu atnaujinimas (UPDATE)</h2>
         <form action="#" method="get">
             <input type="number" name="id" value="" placeholder="Numeris(ID)">
             <input type="text" name="naujasVardas" value="" placeholder="Naujas Vardas">
             <input type="text" name="naujaPavarde" value="" placeholder="Nauja pavarde"><br>
             <button type="submit">Atnaujinti</button>
         </form>
         <?php
         if (isset($_GET['id'])) {
             $atnaujinti = doctorUpdate($_GET['id'], $_GET['naujasVardas'], $_GET['naujaPavarde']);
             echo "Atnaujintas: $atnaujinti <br>";
         }
          ?>
          <hr>
          <h2>Daktaro istrinimas</h2>
          <form action="#" method="get">
              <input type="number" name="deleteid" value="" placeholder="Numeris(ID)"><br>
              <button type="submit">istrinti</button>
          </form>
          <?php
          if (isset($_GET['deleteid'])) {
              $istrinti = deleteDoctor($_GET['deleteid']);
              echo "Istrinta: $istrinti <br>";
          }
           ?>
           <hr>
           <h2>Visi daktarai</h2>
           <table>
               <tr>
                   <th>Numeris</th>
                   <th>Vardas</th>
                   <th>Pavarde</th>
                   <th></th>
               </tr>
                   <?php
                   $rezultatai = getDoctors();
                   $Gydytojas = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                   while ($Gydytojas) {
                       echo "<tr>";
                       echo "<th>$Gydytojas[id]</th>";
                       echo "<th>$Gydytojas[name]</th>";
                       echo "<th>$Gydytojas[lname]</th>";
                       echo "<th><a href='delete-doc.php?delete=$Gydytojas[id]'<button type='submit' >istrinti</button></th>";
                       echo "</tr>";
                       $Gydytojas = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
                   }
                   ?>
           </table>
    </body>
</html>
<?php
