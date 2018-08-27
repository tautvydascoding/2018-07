
    <?php
    require_once("header.php");
    require_once("db_function.php");
    ?>
    </div>
        <!-- WRAPERIO PABAIGA -->

        <main class=" home_main">
            <div class="home_text">
<?php
$visiHomeText = getAllHomText();
$hText = mysqli_fetch_assoc($visiHomeText);
while ($hText) :
    echo "<h1> $hText[Title] </h1>";
echo "<br> ";
echo " <br> ";
echo "<h3> $hText[Subtitle] </h3>";
$hText = mysqli_fetch_assoc($visiHomeText);
endwhile; ?>  </div>
        </main>

    <?php
    require_once("footer.php");
    ?>

