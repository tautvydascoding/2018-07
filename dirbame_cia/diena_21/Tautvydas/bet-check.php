<?php
include('db-connect.php');

// $sql = "SELECT id, final
//         FROM matches
//         WHERE final = 'h' OR final = 'x' OR final = 'a'
//         ;";
// $result = mysqli_query($connection, $sql);
// while ($row = mysqli_fetch_assoc($result)) {
//     $sql = "UPDATE bets
//         SET result = 1
//         WHERE match_1_id = ".$row['id']."
//         ;";
// }

// $sql = "SELECT bets.id
//         FROM bets
//         FULL OUTER JOIN matches
//         ON bets.match_1_id = matches.id
//         WHERE bets.match_1_final = true AND matches.final = true AND bets.match_1_final = matches.final
//         ;";

// $sql = "UPDATE bets
//         SET result = 1
//         WHERE match_1_final = (
//                 SELECT matches.final
//                 FROM matches
//                 INNER JOIN matches.id = bets.match_1_id
//                 WHERE matches.id = bets.match_1_id
//         )
//         ;";


// $sql = "UPDATE bets
//         SET result = 1
//         INNER JOIN matches
//         ON bets.match_1_id = matches.id
//         WHERE 
//         ;";

// $sql1 = "SELECT match_".$i."_id as match_id FROM matches;";
// $result1 = mysqli_query($connection, $sql1);
// while ($row = mysqli_fetch_assoc($result1)) {

// }

for ($i=0; $i < 5; $i++) { 
        $sql1 = "SELECT match_".$i."_id as match_id FROM bets;";
        $result1 = mysqli_query($connection, $sql1);
        print_r($result1);
        if (!$result1) {
                echo "aaa$i";
                continue;
        }
        if (mysqli_num_rows($result1) != false || mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                        $sql = "UPDATE bets
                                SET match_".$i."_end = (
                                        SELECT matches.final
                                        FROM matches
                                        INNER JOIN bets
                                        ON matches.id = bets.match_".$i."_id
                                        WHERE matches.id = ".$row['match_id']."
                                        -- ORDER BY 
                                )
                                WHERE result = false
                                ;";
                mysqli_query($connection, $sql);
                // echo mysqli_error($connection);
                }
        } else {
                continue;
        }
}
$sql = "UPDATE bets
        SET result = 1
        WHERE match_1_final = match_1_end
        AND match_2_final = match_2_end
        AND match_3_final = match_3_end
        AND match_4_final = match_4_end
        AND match_5_final = match_5_end
        ;";
mysqli_query($connection, $sql);