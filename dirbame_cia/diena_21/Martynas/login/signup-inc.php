<?php

if (isset($_POST['submit'])) {
  include_once("db_include.php");

  $first = mysqli_real_escape_string(getPrisijungimas(), $_POST['first']);
  $last = mysqli_real_escape_string(getPrisijungimas(), $_POST['last']);
  $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']);
  $uid = mysqli_real_escape_string(getPrisijungimas(), $_POST['uid']);
  $pwd = mysqli_real_escape_string(getPrisijungimas(), $_POST['pwd']);

  // error handlers
  //check emty fields

  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: signup.php?signup=empty");
    exit();
  } else {
    // check if input chars are valid
    if (preg_match("[a-zA-Z]", $first) || preg_match("[a-zA-Z]", $last)) {
      header("Location: signup.php?signup=invalid");
      exit();
    } else {
      // chech is email valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?signup=email");
        exit();
      } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query(getPrisijungimas(), $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: signup.php?signup=usertaken");
          exit();
        } else {
            // hashing psw
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            //INSERT USER IN db
          $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
          mysqli_query(getPrisijungimas(), $sql);
          header("Location: signup.php?signup=success");
          exit();
        }

      }
    }

  }

} else {
  header(" Location : signup.php");
  exit();
}