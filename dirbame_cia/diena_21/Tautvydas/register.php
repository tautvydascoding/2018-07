<?php 
require_once('db-connect.php');
require_once('includes/start-navbar.inc.php');
include_once('includes/aside.inc.php');
?>
<div class="col-md">
    <div class="row">
        <div class="col-md-12  odds">
            <div class="row">
                <div class="col-md-12 odds-h1 odds-h1-large">
                    <div class="mb-2">Sign Up</div>
                    <div class="odds-upcoming">
                        Create account to explore free betting!
                    </div>
                </div>
                <img class="odds-flag odds-flag-large" src="./images/<?php echo $leagueInfo['country_flag'] ?>.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <form class="col-md-12 register-form" method="POST" action="signup.php">
            <input type="email" name="email" placeholder="Email" autofocus>
            <input type="text" name="username" placeholder="Create username" pattern="[/^[a-zA-Z]*$]">
            <input type="password" name="password" placeholder="Create password" pattern="[/^[a-zA-Z]*$]">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</div>
<?php
require_once('includes/card.inc.php');
require_once('includes/end-footer.inc.php');