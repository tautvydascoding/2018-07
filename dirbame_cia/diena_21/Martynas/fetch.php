<?php

include("db_function.php");

if (isset($_POST["limit"], $_POST["start"])) {

  $manoSQL = "SELECT * FROM tbl_gallery ORDER BY id DESC LIMIT " . $_POST['start'] . ", " . $_POST['limit'] . "";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  while ($img = mysqli_fetch_array($result)) {
    echo "<div class='col'> 
    <img class='gal_mrg' src='fetchimg/$img[name]' width='350' height='300'> 
    </div>";

  }
} else {
  echo "neveikia";
  echo "$img[name]";
}



// function getAllImg()
// {
//     // salyga, kad paimami visi gydytojai
//   $manoSQL = "SELECT * FROM tbl_gallery";

//     // query grazina OBJEKTA NE MASYVA!!!!!!! sio objekto viduje yra daug eiluciu is DB. Siuo metu, visi duomenys is doctors lenteles yra musu php faile ir $visiGydytojai kintamajame
//   $visiIMG = mysqli_query(getPrisijungimas(), $manoSQL);

//     // grazinam paimta gydytoja
//   return $visiIMG;
// }
// $visiIMG = getAllImg();
// $img = mysqli_fetch_assoc($visiIMG);

// while ($img = mysqli_fetch_assoc($visiIMG)) {
//   echo " <h2> $img[name]  </h2>";
//   $img = mysqli_fetch_assoc($visiIMG);
// }

?>
