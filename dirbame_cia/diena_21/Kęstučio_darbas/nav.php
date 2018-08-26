<img class="logo" src="./img/slide-logo-2.png" alt="logo">

<?php  include ('db.php');
$nav1 = getNav(1);
$nav2 = getNav(2);
$nav3 = getNav(3);
  // pasitikrinimas:
 //print_r( $nav1 );
?>

<!-- IDEA: Meniu -->
    <nav class="navbar navbar-expand-lg navbar-light  floar">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" href="index.php"> <?php echo $nav1['pavadinimas']; ?> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="keliones.php"> <?php echo $nav2['pavadinimas']; ?> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="kontaktai.php"> <?php echo $nav3['pavadinimas']; ?> </a>
         </li>
       </ul>
     </div>
   </nav>
<!-- IDEA: Pabaigem meniu -->
