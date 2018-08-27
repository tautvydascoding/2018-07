<?php 
if (!isset($_SESSION['cardb'])) {
  $_SESSION['cardb'] = array();
}
if (!isset($_SESSION['bet_final'])) {
  $_SESSION['bet_final'] = array('odd' => 1);
}
// if (!isset($_SESSION['bet_final']['odd'])) {
//   $_SESSION['bet_final']['odd'] = 0;
// }
?>

<div class="col-md-2 cardb ml-4">
          <div class="row cardb-header">
            Betting card
          </div>
          <div class="row cardb-alert pl-1 d-none">
            <i class="material-icons mr-2">error_outline</i>
          </div>
          <?php
            for ($x=0; $x < count($_SESSION['cardb']); $x++) :
          ?>
          <div class="row cardb-item" tempid="<?php echo $_SESSION['cardb'][$x]; ?>">
            <div class="col-9">
              <div class="row cardb-item-info">
                <div><?php echo $_SESSION['cardb'][$x]['date'].' '. date("H:i", strtotime($_SESSION['cardb'][$x]['time']) + ($_SESSION['timezone'] - $_SESSION['cardb'][$x]['timezone']) * 60 * 60); ?></div>
                <div><?php echo $_SESSION['cardb'][$x]['team_h'].' X '.$_SESSION['cardb'][$x]['team_a']; ?></div>
              </div>
              <div class="row"><?php echo $_SESSION['cardb'][$x]['team_selected']; ?></div>
            </div>
            <div class="col-3 card-item-more">
              <i tempid="<?php echo $x; ?>" class="material-icons card-item-clear">delete_outline</i>
              <div><?php echo $_SESSION['cardb'][$x]['odd']; ?></div>
            </div>
          </div>
          <?php
            endfor;
          // endif;
          ?>

          <!-- <div class="row cardb-item">
            <div class="col-9">
              <div class="row cardb-item-info">
                <div>08.22 21:45</div>
                <div>Arsenal X Man Utd</div>
              </div>
              <div class="row">X</div>
            </div>
            <div class="col-3 card-item-more">
              <i class="material-icons card-item-clear">delete_outline</i>
              <div>3.7</div>
            </div>
          </div> -->



          <div class="row cardb-items-end">
            <div class="col-md-12 cardb-final">
              <div>Final odd</div>
              <div class="cardb-final-odd"><?php echo $_SESSION['bet_final']['odd']; ?></div>
            </div>
          </div>
          <form class="row" method="POST" action="../bet-query.php">
            <div class="col-md-12 cardb-bet">
              <div>Your bet:</div>
              <input type="number" name="bet" align="right" type="number" step="0.01" min="1" max="<?php echo cash(); ?>">
            </div>
            <div class="col-md-12 cardb-cash"><span><?php if(isset($_SESSION['user_id'])){echo 'Max: '.cash();}else{echo 'Log in to make a bet!';} ?></span></div>
            <div class="col cardb-possible">
              <div>Possible winning:</div>
              <div class="cardb-possible-win"></div>
            </div>
            <button class="cardb-btn" name="submit">Submit</button>
          </form>

        </div>