<?php
  include('simple_html_dom.php');
  include('db-connect.php');

  $countries = array();
  $countries['england']['url'] = 'http://www.sports-betting-explorer.com/great-britain.php';
  $countries['england']['league_id'] = 1;
  $countries['italy']['url'] = 'http://www.sports-betting-explorer.com/italy.php';
  $countries['italy']['league_id'] = 2;  
  $germany = 'http://www.sports-betting-explorer.com/germany.php';
  $spain = 'http://www.sports-betting-explorer.com/spain.php';
  $france = 'http://www.sports-betting-explorer.com/france.php';
  $russia = 'http://www.sports-betting-explorer.com/russia.php';
  $lithuania = 'http://www.sports-betting-explorer.com/?country=LT';
  // $country = $england;
  foreach ($countries as $country) :
  $html = file_get_html($country['url']);
  $elements1 = $html->find('span');
  $arrlength = count($elements1);
  $odds = array();
  for($x = 0; $x < $arrlength; $x++) {
    $element1 = str_replace('<span style="font-size:12px;font-weight:bold;background-color:#46B6E0;padding:2px;">', "", $elements1[$x]);
    $element2 = str_replace('</span><br><span style="font-size:10px;">', "", $element1);
    if (strlen($element2) < 12 ){
      $odds[count($odds)] = (float)$element2;
    }
  }
  $oddsf = array();

  for ($i=0; $i < count($odds); $i++) {
    // if ($odds[$i] > count($oddsf)) {
    //   $oddsf[$i] = array();
    // }
    $ceil = ceil(($i+1)/3)-1;
    if (!isset($odds[$i])) {
      $odds[$i] = null;
    }
    $oddsf[$ceil][count($oddsf[$ceil])] = $odds[$i];
  }

  $matches = $html->find('#r98');
  for ($i=0; $i < count($matches); $i++) {
    $matches[$i] = (string)$matches[$i];
    $point = strpos($matches[$i], '-', 49) + 2;
    $team2 = substr($matches[$i], $point);
    $team1 = str_replace(' - ' . $team2, "", $matches[$i]);
    $team2 = str_replace('<br><span style="color:red;font-style:italic;"> </span></td>', "", $team2);
    $team2 = str_replace('<br><span style="color:red;font-style:italic;">Live</span></td>', "", $team2);
    $team1 = str_replace('<td scope="row" id="r98" width="180" style="font-weight:bold;">', "", $team1);
    $oddsf[$i][3] = $team1;
    $oddsf[$i][4] = $team2;
  }

  $dates = array();
  foreach ($html->find('td') as $td) {
    if ($td->width == 80) {
      $dates[count($dates)] = (string)$td;
    }
  }
  for ($i=0; $i < count($dates); $i++) {
    $dates[$i] = str_replace('<td width="80">', "", $dates[$i]);
    $dates[$i] = str_replace('</td>', "", $dates[$i]);
  }
  for ($i=0; $i < count($dates); $i++) {
    $oddsf[$i][5] = $dates[$i];
  }

  $times = array();
  foreach ($html->find('td') as $td) {
    if ($td->width == 50) {
      $times[count($times)] = (string)$td;
    }
  }
  for ($i=0; $i < count($times); $i++) {
    $times[$i] = str_replace('<td width="50">', "", $times[$i]);
    $times[$i] = str_replace('</td>', "", $times[$i]);
  }
  for ($i=0; $i < count($times); $i++) {
    $oddsf[$i][6] = $times[$i];
  }

// $oddsf paaiskinimas:
// 0. odd_h
// 1. odd_x
// 2. odd_a
// 3. Home team
// 4. Away team
// 5. date
// 6. time

// Naujos lygos komandu ikelimas:
// $newTeams = array('Juventus', 'Lazio', 'Roma', 'Atalanta', 'Sampdoria', 'Napoli', 'AC Milan', 'Bologna', 'Frosinone', 'SPAL', 'Parma', 'Inter', 'Torino', 'Genoa', 'Empoli', 'Chievo', 'Cagliari', 'Sassuolo', 'Udinese', 'Fiorentina');
// for ($i=0; $i < count($newTeams); $i++) { 
//   $sql = "INSERT INTO teams (name, league_id)
//           VALUES ('".$newTeams[$i]."', '2')
//   ;";
//   mysqli_query($connection, $sql);
// }

// Naujas macas || Koeficientu atnaujinimas

// 1. Lygos komandu pasirinkimas
$sql = "SELECT name FROM teams WHERE league_id = '".$country['league_id']."';";
$result = mysqli_query($connection, $sql);
$allTeams = array();
for ($i=0; $i < mysqli_num_rows($result); $i++) {
  $allTeams[$i] = mysqli_fetch_assoc($result)['name'];
}
// 2. Gautu komandu tikrinimas
for ($i=0; $i < count($oddsf); $i++) { 
  for ($x=0; $x < count($allTeams); $x++) { 
    if ($oddsf[$i][3] != $allTeams[$x]) {
      continue;
    }
    for ($y=0; $y < count($allTeams); $y++) { 
      if ($oddsf[$i][4] != $allTeams[$y]) {
        continue;
      }
      $sql = "SELECT * FROM matches 
              HAVING team_h_id = (SELECT id FROM teams WHERE name = '".$oddsf[$i][3]."')
              AND team_a_id = (SELECT id FROM teams WHERE name = '".$oddsf[$i][4]."')
              AND date = '".$oddsf[$i][5]."'
              AND time = '".$oddsf[$i][6].":00'              
              ;"; 
      $result = mysqli_query($connection, $sql);
      if (!$result || mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO matches (odd_h, odd_x, odd_a, team_h_id, team_a_id, date, time)
        VALUES ('".$oddsf[$i][0]."',
                '".$oddsf[$i][1]."',
                '".$oddsf[$i][2]."',
                (SELECT id FROM teams WHERE name = '".$oddsf[$i][3]."'),
                (SELECT id FROM teams WHERE name = '".$oddsf[$i][4]."'),
                '".$oddsf[$i][5]."',
                '".$oddsf[$i][6]."')
                ;";
        mysqli_query($connection, $sql);
      } else {
        $sql = "SELECT id, odd_h, odd_x, odd_a FROM matches
                WHERE team_h_id = (SELECT id FROM teams WHERE name = '".$oddsf[$i][3]."')
                AND team_a_id = (SELECT id FROM teams WHERE name = '".$oddsf[$i][4]."')
                AND date = '".$oddsf[$i][5]."'
                AND time = '".$oddsf[$i][6].":00'  
                ;";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($oddsf[$i][0] != $row['odd_h'] || $oddsf[$i][1] != $row['odd_x'] || $oddsf[$i][2] != $row['odd_a']) {
          $sql = "UPDATE matches
                  SET odd_h = '".$oddsf[$i][0]."',
                  odd_x = '".$oddsf[$i][1]."',
                  odd_a = '".$oddsf[$i][2]."'
                  WHERE id = '".$row['id']."'
                  ;";
          mysqli_query($connection, $sql);
        }
      }
    }
  }
}
endforeach;