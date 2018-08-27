<?php
include("Lhead.php");

?>



<section class="main-container">

  <div class="main-wraper">
    <h2>UNDO STUDIJA ADMINISTRACIJA</h2>
      
<?php
if (isset($_SESSION['u_id'])) {
  echo "<h3>Is cia galite valdyti tam tikras puslapio funkcijas, tokias kaip:</h3> <br>
  <ol>
      <li> Socialines ikoneles (jas prideti, naujinti ar istrinti).</li>
      <li> Karuseles paveikselius (juos prideti ir istrinti).</li>
      <li>Home teksta (naujinti ar istrinti).</li>
      <li>Matyti asmenu, kurie parase zinutes informacija, bei ja valdyti.</li>
      <li>Matyti prisiregistravusiu useriu informacija ir ja valdyti</li>
  </ol>
  
  ";
}
?>

  </div>

</section>






<?php
include("Lfooter.php");
?>