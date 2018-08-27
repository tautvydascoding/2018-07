<?php 
require_once('db-connect.php');
require_once('includes/start-navbar.inc.php');
include_once('includes/aside.inc.php');

$sql = "SELECT COUNT(matches.id) as total, country, LOWER(country) as country_flag, timezone
        FROM matches
        INNER JOIN teams
        ON matches.team_h_id = teams.id
        INNER JOIN leagues
        ON teams.league_id = leagues.id
        WHERE teams.league_id = '".$_GET['id']."' AND (date > CURDATE() OR (date = CURDATE() AND time > CURTIME())) AND date < DATE_ADD(CURDATE(), INTERVAL 7 DAY)
        ;";
$leagueInfo = mysqli_fetch_assoc(mysqli_query($connection, $sql));
$timeDiff = $utc - $leagueInfo['timezone'];
?>
<div class="col-md">
    <div class="row">
        <div class="col-md-12  odds">
            <div class="row">
                <div class="col-md-12 odds-h1 odds-h1-large">
                    <div class="mb-2"><?php echo $leagueInfo['country'] ?></div>
                    <div class="odds-upcoming">
                        <span class="odds-upcoming-count"><?php echo $leagueInfo['total']; ?></span>
                        upcoming matches
                    </div>
                </div>
                <img class="odds-flag odds-flag-large" src="./images/<?php echo $leagueInfo['country_flag'] ?>.png" alt="">
            </div>
        </div>
    </div>
            <?php
                $sql = "SELECT matches.id, matches.odd_h, matches.odd_x, matches.odd_a, teams.name as team_h, t2.name as team_a, matches.date, ADDTIME(matches.time, '$timeDiff:00:00') as time
                        FROM matches
                        INNER JOIN teams
                        ON matches.team_h_id = teams.id
                        INNER JOIN (SELECT id, name FROM teams) as t2
                        ON matches.team_a_id = t2.id
                        WHERE teams.league_id = ".$_GET['id']." AND (date > CURDATE() OR (date = CURDATE() AND time > '".date('H:i:s', time() - $timeDiff * 60 * 60)."')) AND date < DATE_ADD(CURDATE(), INTERVAL 7 DAY)
                        ORDER BY date, time ASC
                        ;";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  $row['date'] = substr((string)$row['date'], 5);
                  $row['time'] = substr((string)$row['time'], 0, 5);
              ?>
                  <div class="row">
                    <div class="col-md-12 odds-date">
                      <?php echo $row['date'] . ' ' . $row['time']; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 odds-list mb-2">
                      <div class="odds-item" id="odd-<?php echo $row['id']; ?>-h">
                        <div class="odds-item-team">
                          <?php echo $row['team_h']; ?>
                        </div>
                        <div class="odds-item-odd">
                          <?php echo $row['odd_h']; ?>
                        </div>
                      </div>
                      <div class="odds-item" id="odd-<?php echo $row['id']; ?>-x">
                        <div class="odds-item-team">
                          X
                        </div>
                        <div class="odds-item-odd">
                          <?php echo $row['odd_x']; ?>
                        </div>
                      </div>
                      <div class="odds-item" id="odd-<?php echo $row['id']; ?>-a">
                        <div class="odds-item-team">
                          <?php echo $row['team_a']; ?>
                        </div>
                        <div class="odds-item-odd">
                          <?php echo $row['odd_a']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php } ?>
</div>
<?php
require_once('includes/card.inc.php');
require_once('includes/end-footer.inc.php');