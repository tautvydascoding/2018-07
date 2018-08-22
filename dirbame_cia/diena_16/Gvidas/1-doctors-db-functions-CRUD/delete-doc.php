<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once('db_functions.php');
        if (isset($_GET['id'])) {
            $istrinti = deleteDoctor($_GET['id']);
            echo "Sekmingai Istrinta";
            echo "<META http-equiv='refresh' content='3;URL=visidaktarai.php'> ";
        } else {
            echo "Toks puslapis nerastas";
        }
         ?>
    </body>
</html>
