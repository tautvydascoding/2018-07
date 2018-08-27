<?php
include('simple_html_dom.php');
include('db-connect.php');

$countries = array();
$countries['england']['url'] = 'https://en.wikipedia.org/wiki/2018%E2%80%9319_Premier_League';
$countries['england']['league_id'] = 1;
$countries['england']['teams_ids'] = array(5, 11, 8, 16, 18, 10, 14, 12, 15, 19, 17, 7, 2, 3, 9, 20, 4, 13, 6, 1);
$countries['england']['time_diff'] = 3;
foreach ($countries as $country) :
    $html = file_get_html($country['url']);
    $results = array();
    $x = 0;
    $y = 0;
    foreach ($html->find('table[class=plainrowheaders] > tbody > tr > td') as $value) {
        if ($x == 20) {
            $x = 0;
            $y++;
        }
        $results[$y][$x] = array();
        if (!ctype_digit(substr($value->plaintext, 0, strpos($value->plaintext, '–')))) {
            $x++;
            continue;
        }
        $results[$y][$x] = array();
        $results[$y][$x]['score_h'] = (int)substr($value->plaintext, 0, strpos($value->plaintext, '–'));
        // Neisveda away rezultato
        $results[$y][$x]['score_a'] = (int)substr($value->plaintext, strpos($value->plaintext, '–') + 3);
        $results[$y][$x]['team_h_id'] = $country['teams_ids'][$y];
        $results[$y][$x]['team_a_id'] = $country['teams_ids'][$x];

        if ($results[$y][$x]['score_h'] > $results[$y][$x]['score_a']) {
            $match_result = 'h';
        } elseif ($results[$y][$x]['score_h'] < $results[$y][$x]['score_a']) {
            $match_result = 'a';
        } else {
            $match_result = 'x';
        }

        $sql = "UPDATE matches
                SET score_h = '".$results[$y][$x]['score_h']."', score_a = '".$results[$y][$x]['score_a']."', final = '$match_result'
                WHERE team_h_id = ".$results[$y][$x]['team_h_id']."
                AND team_a_id = ".$results[$y][$x]['team_a_id']."
                AND final = false
                AND date <= 'CURDATE() - ".$country['time_diff'].":00:00';
                ;";
        mysqli_query($connection, $sql);
        $x++;
    }

    unset($results);
endforeach;

// INSERT INTO matches (team_h_id, team_a_id, date, time) VALUES (5, 2, '2018-08-01', '15:00:00')