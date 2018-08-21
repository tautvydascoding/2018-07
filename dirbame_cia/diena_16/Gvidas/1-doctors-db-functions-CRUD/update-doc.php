<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php include_once('db_functions.php'); ?>
        <h2>Daktaro duomenu atnaujinimas (UPDATE)</h2>
        <form action="#" method="get">
            <input type="number" name="id" disabled value="<?php echo $_GET['id']; ?>">
            <input type="text" name="naujasVardas" value="" placeholder="Naujas Vardas">
            <input type="text" name="naujaPavarde" value="" placeholder="Nauja pavarde"><br>
            <button type="submit">Atnaujinti</button>
        </form>
        <?php
        if (isset($_GET['naujasVardas'])) {
            $atnaujinti = doctorUpdate($_GET['id'], $_GET['naujasVardas'], $_GET['naujaPavarde']);
            echo "Sekmingai atnaujinta<br>";
            echo "<META http-equiv='refresh' content='3;URL=visidaktarai.php'>";
        } else {
            echo "Prasome ivesti duomenis<br>";
        }
         ?>
    </body>
</html>
