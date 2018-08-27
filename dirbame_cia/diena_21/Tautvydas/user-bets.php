<?php 
require_once('db-connect.php');
require_once('includes/start-navbar.inc.php');
include_once('includes/aside.inc.php');

$sql = "SELECT COUNT(result) as res FROM bets WHERE user_id = ".$_SESSION['user_id']." AND result IS NULL;";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="col-md">
    <div class="row">
        <div class="col-md-12  odds">
            <div class="row">
                <div class="col-md-12 odds-h1 odds-h1-large">
                    <div class="mb-2">Betting history</div>
                    <div class="odds-upcoming">
                        <span class="odds-upcoming-count mr-1"><?php echo $row['res']; ?></span>bets waiting for result
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$sql = "SELECT bets.date, bets.bet_amount, bets.final_odd, bets.result, bets.odd_1, bets.odd_2, bets.odd_3, bets.odd_4, bets.odd_5, bets.match_1_id, bets.match_2_id, bets.match_3_id, bets.match_4_id, bets.match_5_id
        FROM bets
        WHERE bets.user_id = ".$_SESSION['user_id']."
        ORDER BY bets.date DESC
        ;";
$result1 = mysqli_query($connection, $sql);
while ($row1 = mysqli_fetch_assoc($result1)) :

    $sql = "SELECT *
            FROM matches
            WHERE id = ".$row1['match_1_id']."
            ;";
    $result = mysqli_query($connection, $sql);
    $row21 = mysqli_fetch_assoc($result);

    $sql = "SELECT *
            FROM matches
            WHERE id = ".$row1['match_2_id']."
            ;";
    $result = mysqli_query($connection, $sql);
    $row22 = mysqli_fetch_assoc($result);

    $sql = "SELECT *
            FROM matches
            WHERE id = ".$row1['match_3_id']."
            ;";
    $result = mysqli_query($connection, $sql);
    $row23 = mysqli_fetch_assoc($result);

    $sql = "SELECT *
            FROM matches
            WHERE id = ".$row1['match_4_id']."
            ;";
    $result = mysqli_query($connection, $sql);
    $row24 = mysqli_fetch_assoc($result);
    
    $sql = "SELECT *
            FROM matches
            WHERE id = ".$row1['match_5_id']."
            ;";
    $result = mysqli_query($connection, $sql);
    $row25 = mysqli_fetch_assoc($result);
?>


    <div class="row bet-info p-1 bet-info-waiting">
        <div class="col-8 d-none">
            <div class="row">
                <div class="col-12"><?php echo $row1['date']; ?></div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row align-items-center">
                    <div class="mr-2">Juventus - 1.47</div>
                    <div class="rem75"><?php echo $row21['date'].' '.$row21['time'].' '.$row21['team_h_id'].' X '.$row21['team_a_id'] ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row align-items-center">
                    <div class="mr-2">Juventus - 1.47</div>
                    <div class="rem75">07-20 19:00 Juventus X Napoli</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row align-items-center">
                    <div class="mr-2">Juventus - 1.47</div>
                    <div class="rem75">07-20 19:00 Juventus X Napoli</div>
                </div>
            </div>
        </div>
        <div class="col-8 d-flex flex-column align-items-start justify-content-end">
            <div><?php echo $row1['date']; ?></div>
            <div>Bet: <?php echo $row1['bet_amount']; ?></div>
            <div>Final odd: <?php echo $row1['final_odd']; ?></div>            
            <div>Possible winning: <?php echo ($row1['bet_amount'] * $row1['final_odd']); ?></div>
        </div>
        <div class="col-4 d-flex align-items-end justify-content-end">
        <div>Result: <?php if ($row1['result'] === 1) {echo "Won";} elseif ($row1['result'] === 0) {echo "Lost";} else {echo "Waiting";}?></div>
        </div>
    </div>


<?php
endwhile;
?>

</div>
<?php

require_once('includes/card.inc.php');
require_once('includes/end-footer.inc.php');