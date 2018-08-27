<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<header>
  <nav>
    <div class='main-wraper'>
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="../index.php">Undo</a></li>
          <!-- <a href="../login/signup.php">sign up</a> -->
          <!-- <li><a href="../adminPanel/indexadmin.php">Admin</a></li> -->
          <?php 
          if (isset($_SESSION['u_id'])) {
            echo '
              
                    <li class="HF_ul"><a href="../adminPanel/socialIcons.php">Soc. Icons</a> </li>
                    <li class="HF_ul"><a href="../adminPanel/carusel.php">Carus. Img</a> </li>
                    <li class="HF_ul"><a href="../adminPanel/hometext.php">Home Tekstai</a> </li>
                    <li class="HF_ul"><a href="../adminPanel/lankytojai.php">Lankytojai</a> </li>
                    <li class="HF_ul"><a href="../adminPanel/useriai.php">Useriai</a> </li>
                    ';

          }


          ?>
      </ul>
      <div class='nav-login'>
      <?php
      if (isset($_SESSION['u_id'])) {
        echo "<form action='logout-inc.php' method='POST'>
              <button type='submit' name='submit'>Logout</button>
            </form>";
      } else {
        echo ' <form action="login-inc.php" method="POST">
      <input type="text" name="uid" placeholder="username/email">
      <input type="password" name="pwd" placeholder="password">
      <button type="submit" name="submit">Login</button>
      </form>


      <a href="signup.php">Sign up</a>';
      }
      ?>

      </div>
    </div>
  </nav>
</header>

