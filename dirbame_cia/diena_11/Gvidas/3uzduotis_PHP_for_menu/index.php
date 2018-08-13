<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
        $menu = array('Home', 'About', 'Gallery', 'Contacts', 'Blog');
        echo "<nav>";
        for ($i=0; $i < count($menu) ; $i++) {
            echo "<a href='". $menu[$i] . "'>   " . $menu[$i] . "</a>";
        }
        echo "</nav>";
        ?>

        <?php
        // uzduotis 2
        // A. susirasti 6 nuotraukas
        // B. susikurti nuotrauku TIK pavadinimu masyva
        // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
        $foto = array('', '1.png', '2.png', '3.png', '4.png', '5.png', '6.png');
        for ($i=0; $i < count($foto); $i++) {
            echo "<img src='img/$foto[$i]' alt=''>";
            if ($i % 3 === 0) {
                echo "<br>";
            }
        }
         ?>

    </body>
</html>
