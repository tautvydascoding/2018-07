<?php
session_start();

for ($i=0; $i < count($_SESSION['cardb']); $i++) { 
    if ($_POST['id'] == $i) {
        // unset($_SESSION['cardb'][$i]);
        $_SESSION['bet_final']['odd'] /= $_SESSION['cardb'][$i]['odd'];
        $_SESSION['bet_final']['odd'] = round($_SESSION['bet_final']['odd'], 2);
        // echo "<script>$('.odd-item').has('#odd-".$_SESSION['cardb'][$i]['match_id']."-h').removeClass('odds-item-selected');</script>";
        echo "<script>
            $('#odd-".$_SESSION['cardb'][$i]['match_id']."-h').removeClass('odds-item-selected');
            $('#odd-".$_SESSION['cardb'][$i]['match_id']."-x').removeClass('odds-item-selected');
            $('#odd-".$_SESSION['cardb'][$i]['match_id']."-a').removeClass('odds-item-selected');
        </script>";
        array_splice($_SESSION['cardb'], $i, 1);
    }
}
?>
<script>
$('.cardb-final-odd').text(<?php echo $_SESSION['bet_final']['odd']; ?>);
</script>