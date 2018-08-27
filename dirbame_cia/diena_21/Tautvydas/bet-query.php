<?php
session_start();
require_once('db-connect.php');

if (!isset($_POST['submit'])) {
    header('Location: index.php');
    die();
}
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    die();
}

$oddsArray = array();
for ($y=0; $y < count($_SESSION['cardb']); $y++) {
    $oddsArray['nr'][$y] = $y + 1;
    $oddsArray['odd'][$y] = $_SESSION['cardb'][$y]['odd'];
    $oddsArray['id'][$y] = $_SESSION['cardb'][$y]['match_id'];  
    $oddsArray['sign'][$y] = $_SESSION['cardb'][$y]['team_sign'];  
}

$sql = "INSERT INTO bets (user_id, bet_amount, final_odd, odd_".implode(', odd_', $oddsArray['nr']).", match_".implode('_id, match_', $oddsArray['nr'])."_id, match_".implode('_final, match_', $oddsArray['nr'])."_final, date)
        VALUES ('".$_SESSION['user_id']."', '".$_POST['bet']."', '".$_SESSION['bet_final']['odd']."', ".implode(', ', $oddsArray['odd']).", ".implode(', ', $oddsArray['id']).", '".implode('\', \'', $oddsArray['sign'])."', LOCALTIME())
        ;";
mysqli_query($connection, $sql);

function updateCash() {
    global $_SESSION;
    global $_POST;
    global $connection;
    $sql = "SELECT cash FROM users WHERE id = ".$_SESSION['user_id'].";";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return ($row['cash'] - $_POST['bet']);
}
$sql = "UPDATE users
        SET cash = ".updateCash()."
        WHERE id = ".$_SESSION['user_id']."
        ;";
mysqli_query($connection, $sql);
// echo mysqli_error($connection);

unset($_SESSION['cardb']);
unset($_SESSION['bet_final']);
header('Location: index.php?info=bet_successful');
exit();