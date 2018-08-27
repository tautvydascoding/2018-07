<?php include_once ('header.php'); ?>
    <div class="container">
        <?php include_once ('top-navbar.php'); ?>
        <main class="row">
                <?php include_once ('db-prekiu-info.php');
                $ieskoti = mysqli_real_escape_string(getPrisijungimas(), trim($_POST['ieskomaPreke']));
                $rasti = mysqli_query(getPrisijungimas(), "SELECT * FROM visosprekes WHERE name LIKE '%$ieskoti%'");
                while ($row = mysqli_fetch_assoc($rasti)) {
                    $preke = $row['name'];
                    $linkas = $row['id'];
                    $kaina = $row['price'];
                    $rastiFoto = getImg($row['id']);
                    include ('template-preke-search.php');
                    // echo "<a href='preke.php?id=$linkas'>$preke</a><br>";
                }
                ?>

        </main>
    </div>
    <?php include_once ('footer.php'); ?>
