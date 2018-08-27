<?php 
require_once('db-connect.php');
require_once('includes/start-navbar.inc.php');
include_once('includes/aside.inc.php');
?>


        <div class="col-md content">
          <div class="row">
            <div class="col-md-12 alertbox mb-4 <?php if ($_GET['info'] == "incorect") {return;} else {echo 'd-none';}?>">
              <i class="material-icons mr-2">clear</i>
              <div class="mr-1">Invalid username/password.</div>
              <a href="password-recovery.php">Press here to recover</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-4 odds d-none">
              <div class="row">
                <div class="col-md-12 odds-h1 odds-h1-large">
                  <div class="mb-2">England</div>
                  <div class="odds-upcoming">
                    <span class="odds-upcoming-count">12</span>
                    upcoming matches
                  </div>
                </div>
                <img class="odds-flag odds-flag-large" src="./images/england.png" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 offer mb-4">
              <div class="row">
                <div class="col-md-12 offer-h1">
                  Arsenal - Manchester City
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 offer-date">
                  Today 21:45
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 odds-list offer-list">
                  <div class="odds-item">
                    <div class="odds-item-team">
                      Arsenal
                    </div>
                    <div class="odds-item-odd">
                      3.35
                    </div>
                  </div>
                  <div class="odds-item">
                    <div class="odds-item-team">
                      X
                    </div>
                    <div class="odds-item-odd">
                      3.7
                    </div>
                  </div>
                  <div class="odds-item">
                    <div class="odds-item-team">
                      Manchester City
                    </div>
                    <div class="odds-item-odd">
                      2.24
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            $sql = "SELECT league_id, country, LOWER(country) as country_flag, timezone
                    FROM matches
                    INNER JOIN teams
                    ON matches.team_h_id = teams.id
                    INNER JOIN leagues
                    ON teams.league_id = leagues.id
                    GROUP BY league_id
                    ;";
            $mainDataQuery = mysqli_query($connection, $sql);
            while ($mainDataArray = mysqli_fetch_assoc($mainDataQuery)) :
              $timeDiff = $utc - $mainDataArray['timezone'];
          ?>
          <div class="row">
            <div class="col-md-12 mb-4 odds">
              <div class="row">
                <div class="col-md-12 odds-h1">
                  <?php echo $mainDataArray['country']; ?>
                </div>
                <img class="odds-flag" src="./images/<?php echo $mainDataArray['country_flag']; ?>.png" alt="">
              </div>

              <?php
                $sql = "SELECT matches.id, matches.odd_h, matches.odd_x, matches.odd_a, teams.name as team_h, t2.name as team_a, matches.date, ADDTIME(matches.time, '$timeDiff:00:00') as time
                        FROM matches
                        INNER JOIN teams
                        ON matches.team_h_id = teams.id
                        INNER JOIN (SELECT id, name FROM teams) as t2
                        ON matches.team_a_id = t2.id
                        WHERE teams.league_id = ".$mainDataArray['league_id']." AND (date > CURDATE() OR (date = CURDATE() AND time > '".date('h:i:s', time() - $timeDiff * 60 * 60)."'))
                        ORDER BY date, time ASC
                        LIMIT 3
                        ;";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  // $row['time'] = date('h:i', $row['date'] + $timeDiff * 60 * 60);
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

              <div class="row d-none">
                <div class="col-md-12 odds-date">
                  08.20 19:00
                </div>
              </div>
              <div class="row d-none">
                <div class="col-md-12 odds-list mb-2">
                  <div class="odds-item">
                    <div class="odds-item-team">
                      Newcastle
                    </div>
                    <div class="odds-item-odd">
                      9.99
                    </div>
                  </div>
                  <div class="odds-item">
                    <div class="odds-item-team">
                      X
                    </div>
                    <div class="odds-item-odd">
                      9.99
                    </div>
                  </div>
                  <div class="odds-item">
                    <div class="odds-item-team">
                      Tottenham
                    </div>
                    <div class="odds-item-odd">
                      9.99
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <?php endwhile; ?>
          <div class="row">
            <div class="col-md-12 mb-3 odds">
              <div class="row">
                <div class="col-md-12 odds-h1">
                  Germany
                </div>
                <img class="odds-flag" src="./images/germany.png" alt="">
              </div>
            </div>
          </div>
        </div>
<?php
require_once('includes/card.inc.php');
require_once('includes/end-footer.inc.php');