<?php
include("Lhead.php");

?>



<section class="main-container">
  <div class="main-wraper">
    <h2>Sign up</h2>
    <form action="signup-inc.php" class="signup-form" method="POST">
      <input type="text" name="first" placeholder="firstname">
      <input type="text" name="last" placeholder="lastname">
      <input type="email" name="email" placeholder="email">
      <input type="text" name="uid" placeholder="User name">
      <input type="password" name="pwd" placeholder="password">
      <button type='submit' name="submit">Sign up</button>
    </form>

  </div>

</section>






<?php
include("Lfooter.php");
?>