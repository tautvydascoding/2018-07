<?php

session_start();
// die("asasasas");

if (isset($_POST['submit'])) {
  include_once("db_include.php");

  $uid = mysqli_real_escape_string(getPrisijungimas(), $_POST['uid']);
  $pwd = mysqli_real_escape_string(getPrisijungimas(), $_POST['pwd']);

  var_dump($uid);
  //errors handlers
  //check if empty
  if (empty($uid) || empty($pwd)) {
    // header("Location: index.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid' ";
    $result = mysqli_query(getPrisijungimas(), $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck < 1) {
      header("Location: index.php?login=error1");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        //de-hashing psw
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($hashedPwdCheck == false) {
          header("Location: index.php?login=error2");
          exit();
        } else if ($hashedPwdCheck == true) {
          //log in user here
          $_SESSION['u_id'] = $row['id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: index.php?login=success");
          exit();
        }

      }
    }
  }
} else {
  header("Location: index.php?login=error");
  exit();
}


