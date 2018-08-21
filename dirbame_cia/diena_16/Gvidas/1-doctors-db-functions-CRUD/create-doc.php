<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php include_once ('db_functions.php'); ?>
        <h2>Daktaro sukurimas</h2>
        <form action="#" method="get">
            <input type="text" name="vardas" value="" placeholder="Vardas">
            <input type="text" name="pavarde" value="" placeholder="Pavarde"><br>
            <button type="submit">Sukurti</button>
        </form>
        <?php
        if (isset($_GET['vardas'])) {
            $sukurti = createDoctor($_GET['vardas'], $_GET['pavarde']);
            echo "Naujas vartotojas sekmingai sukurtas";
            echo "<META http-equiv='refresh' content='3;URL=visidaktarai.php'> ";
        } else {
            echo "Iveskite duomenis";
        }
         ?>
    </body>
</html>
