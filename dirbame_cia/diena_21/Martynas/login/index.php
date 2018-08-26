<?php
include("Lhead.php");

?>



<section class="main-container">

  <div class="main-wraper">
    <h2>Home</h2>
<?php
if (isset($_SESSION['u_id'])) {
  echo "Login success";
}
?>

  </div>

</section>






<?php
include("Lfooter.php");
?>