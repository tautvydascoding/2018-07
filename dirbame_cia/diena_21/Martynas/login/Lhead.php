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
          <li><a href="../adminPanel/indexadmin.php">Admin</a></li>
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

