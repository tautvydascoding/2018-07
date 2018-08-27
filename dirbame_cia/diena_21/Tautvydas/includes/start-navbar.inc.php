<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <header class="row navbar">
        <h1 class="col-md-1">
          <a href="../index.php">Logo</a>
        </h1>
        <nav class="col-md-5">
          <ul>
            <li>All bets</li>
            <li>Betting tips</li>
            <li>About</li>
            <li>How to play</li>
          </ul>
        </nav>
        <div class="col-md-5 login <?php if ($_SESSION['user_id']) {echo 'd-none';} else {echo '';} ?>">
          <form class="" action="../signin.php" method="post">
            <input type="text" name="username" value="" placeholder="Username">
            <input type="password" name="password" value="" placeholder="Password">
            <button type="submit" name="submit">Login</button>
            <a class="login-register" href="register.php">Sign up</a>
          </form>
        </div>
        <div class="col-md-5 user-info <?php if ($_SESSION['user_id']) {echo '';} else {echo 'd-none';} ?>">
          <div class="d-flex flex-direction-row">
            <i class="material-icons mr-1">account_circle</i>
            <div><?php echo $_SESSION['username']; ?></div>
          </div>
          <div class="d-flex flex-direction-row" data-toggle="tooltip" data-placement="bottom" title="Get more!">
            <i class="material-icons mr-1">local_atm</i>
            <?php
              // $sql = "SELECT cash FROM users WHERE id = '".$_SESSION['user_id']."';";
              // $result = mysqli_query($connection, $sql);
              // $row = mysqli_fetch_assoc($result);
              // $cash = $row['cash'];
              function cash() {
                global $_SESSION;
                global $connection;
                $sql = "SELECT cash FROM users WHERE id = '".$_SESSION['user_id']."';";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                return $row['cash'];
              }
            ?>
            <div><?php echo cash(); ?></div>
          </div>
          <div class="d-flex flex-direction-row">
            <a href="../user-bets.php" class="d-flex flex-direction-row">
              <i class="material-icons mr-1">history</i>
              <div>Bets</div>
            </a>
          </div>
          <div class="d-flex flex-direction-row">
            <i class="material-icons mr-1">settings</i>
            <div>Settings</div>
          </div>
          <div class="d-flex flex-direction-row">
            <i class="material-icons mr-1">close</i>
            <form action="../logout.php" method="POST">
              <button type="submit" name="submit" class="logout">Logout</button>
            </form>
          </div>
        </div>
        <div class="col-md-1 timezone">
          <div class="">Timezone</div>
          <div class="timezone-menu dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
              if (isset($_GET['timezone'])) {
                $_SESSION['timezone'] = $_GET['timezone'];
                $_SESSION['timezone_name'] = $_GET['timezone_name'];
              } elseif (!isset($_GET['timezone']) && !isset($_SESSION['timezone'])) {
                $_SESSION['timezone'] = 3;
                $_SESSION['timezone_name'] = 'Europe/Vilnius';
              }
              $utc = $_SESSION['timezone'];
              date_default_timezone_set($_SESSION['timezone_name']);
              echo date_default_timezone_get();
            ?>
          </div>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item timezone-item" href="../index.php?timezone=1&timezone_name=Europe/London">Europe/London</a>
            <a class="dropdown-item timezone-item" href="../index.php?timezone=2&timezone_name=Europe/Rome">Europe/Rome</a>
            <a class="dropdown-item timezone-item" href="../index.php?timezone=3&timezone_name=Europe/Vilnius">Europe/Vilnius</a>
          </div>
        </div>
      </header>
      <main class="row mt-4">