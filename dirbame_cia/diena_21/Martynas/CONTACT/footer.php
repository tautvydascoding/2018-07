<?php 
include("../db_function.php");
?>

            <footer>
                <div class="mdl-grid footer_wrapper">
                    <div class="footer_link_wrapper">
                        <ul class="footer-nav">
                            <li>
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../About us/aboutus.php">About us</a>
                            </li>
                            <li>
                                <a href="../GALERY/galery.php">Galery</a>
                            </li>

                            <li>
                                <a href="contacts.php" class="dabartinis">Contact Us!</a>
                            </li>
                        </ul>
                        <div class="">
                            <ul class="social-links">

   <?php
//while ($tekstas) {
    //   echo " <h2> $tekstas[name] </h2 <br>
    //   <h3> $tekstas[article] </h3>";
    //   $tekstas = mysqli_fetch_assoc($visiTekstai);
    // }
    $visiIconai = getAllSocIcons();
    $Iconas = mysqli_fetch_assoc($visiIconai);
    while ($Iconas) :
        echo "  <li>  ";
    echo "  <a href='#'>  ";
    echo " <i class='$Iconas[name]'> </i>  ";
    echo "  </a> ";
    echo "  </li> ";
    $Iconas = mysqli_fetch_assoc($visiIconai);
    endwhile;
    ?>

                        </ul>
                    </div>

                    <div class="copyright">
                        <p>Copyright &copy; 2018 by Martynas.</p>
                    </div>
                </div>

            </div>


        </footer>


    </div>

    <!--  =================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- !!! mano js failas pats zemiausias; visada failo -->
   <script src="JS/main.js"></script>

</body>

</html>