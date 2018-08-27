
        <footer>
            <div class="mdl-grid footer_wrapper">
                <div class="footer_link_wrapper">
                    <ul class="footer-nav">
                        <li>
                            <a href="index_copy.php" class="dabartinis">Home</a>
                        </li>
                        <li>
                            <a href="About us/aboutus.php">About us</a>
                        </li>
                        <li>
                            <a href="GALERY/galery.php">Galery</a>
                        </li>

                        <li>
                            <a href="CONTACT/contacts.php">Contact Us!</a>
                        </li>
                        <li>
                            <a href="login/index.php"><i class="icon ion-ios-contact"></i></a>
                        </li>
                    </ul>
                    <div class="">
                        <ul class="social-links">
<?php

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