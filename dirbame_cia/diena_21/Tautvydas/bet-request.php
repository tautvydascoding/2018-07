<?php
session_start();
require_once('db-connect.php');

if (count($_SESSION['cardb']) == 5) {
  echo 0;
  exit();
}

$matchId = substr($_POST['id'], 4, -2);
$oddTeamSign = substr($_POST['id'], -1);

for ($i=0; $i < count($_SESSION['cardb']); $i++) { 
  if ($matchId == $_SESSION['cardb'][$i]['match_id']) {
    echo 1;
    exit();
  }
}

if ($oddTeamSign == 'x') {
    $sql = "SELECT odd_".$oddTeamSign." as odd
            FROM matches
            WHERE id = ".$matchId."
            ;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['cardb'][count($_SESSION['cardb'])] = array('match_id' => $matchId, 'odd' => $row['odd']);
} else {
    $sql = "SELECT team_".$oddTeamSign."_id as team, odd_".$oddTeamSign." as odd
            FROM matches
            WHERE id = ".$matchId."
            ;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['cardb'][count($_SESSION['cardb'])] = array('match_id' => $matchId, 'team_id' => $row['team'], 'odd' => $row['odd']);
}

$sql = "SELECT matches.odd_$oddTeamSign, teams.name as team_h, t2.name as team_a, matches.date, matches.time, timezone
        FROM matches
        INNER JOIN teams
        ON matches.team_h_id = teams.id
        INNER JOIN (SELECT id, name FROM teams) as t2
        ON matches.team_a_id = t2.id
        INNER JOIN leagues
        ON teams.league_id = leagues.id
        WHERE matches.id = $matchId
        ;";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$row['date'] = substr((string)$row['date'], 5);
$row['time'] = substr((string)$row['time'], 0, 5);
$cardbEnd = count($_SESSION['cardb']) - 1;

// $_SESSION['cardb'][$cardbEnd] = array('date' => '', 'time' => '', 'team_h' => '', 'team_a' => '', 'team_selected' => '');
$_SESSION['cardb'][$cardbEnd]['date'] = $row['date'];
$_SESSION['cardb'][$cardbEnd]['time'] = $row['time'];
$_SESSION['cardb'][$cardbEnd]['team_h'] = $row['team_h'];
$_SESSION['cardb'][$cardbEnd]['team_a'] = $row['team_a'];
if ($oddTeamSign == 'x') {
    $_SESSION['cardb'][$cardbEnd]['team_selected'] = 'X';
} else {
    $_SESSION['cardb'][$cardbEnd]['team_selected'] = $row["team_$oddTeamSign"];
}
$_SESSION['cardb'][$cardbEnd]['timezone'] = $row['timezone'];
$_SESSION['cardb'][$cardbEnd]['team_sign'] = $oddTeamSign;

// if (!isset($_SESSION['bet_final']['odd'])) {
//   $_SESSION['bet_final']['odd'] = 1;
// }
$_SESSION['bet_final']['odd'] *= $_SESSION['cardb'][$cardbEnd]['odd'];
$_SESSION['bet_final']['odd'] = round($_SESSION['bet_final']['odd'], 2);
?>
<div class="row cardb-item" tempid="<?php echo $_SESSION['cardb'][$cardbEnd]; ?>">
  <div class="col-9">
    <div class="row cardb-item-info">
      <div><?php echo $_SESSION['cardb'][$cardbEnd]['date'].' '. date("H:i", strtotime($_SESSION['cardb'][$cardbEnd]['time']) + ($_SESSION['timezone'] - $_SESSION['cardb'][$cardbEnd]['timezone']) * 60 * 60); ?></div>
      <div><?php echo $_SESSION['cardb'][$cardbEnd]['team_h'].' X '.$_SESSION['cardb'][$cardbEnd]['team_a']; ?></div>
    </div>
    <div class="row"><?php echo $_SESSION['cardb'][$cardbEnd]['team_selected']; ?></div>
  </div>
  <div class="col-3 card-item-more">
    <i tempid="<?php echo $cardbEnd; ?>" class="material-icons card-item-clear">delete_outline</i>
    <div><?php echo $_SESSION['cardb'][$cardbEnd]['odd']; ?></div>
  </div>
</div>
<script>
$('.cardb-final-odd').text(<?php echo $_SESSION['bet_final']['odd']; ?>);
$('.card-item-more > i').click(function() {
  var tempId = $(this).attr('tempid');
  // $.post('odd-item-cancel.php', {id: tempId}, function(data){
  //   $('.cardb-item').attr('tempid', tempId).html(data);
  // });
  $.post('odd-item-cancel.php', {id: tempId}, function(data) {
    $('.cardb').append(data);
  });
  $(this).parents('.cardb-item').addClass('d-none');
});
</script>