<?php

session_start();

if (isset($_POST['submit'])) {
    include('db-connect.php');
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    if (empty($username) || empty($password)) {
        header('Location: index.php?info=incorect');      
        exit();  
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) < 1) {
            header('Location: index.php?info=incorect');
            exit();
        } else {
            $row = mysqli_fetch_assoc($result);
            $passwordVerify = password_verify($password, $row['password']);
            if ($passwordVerify == false) {
                header('Location: index.php?info=incorect');
                exit();
            } elseif ($passwordVerify == true) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $row['id'];
                // $_SESSION['cash'] = $row['cash'];
                header('Location: index.php');
                exit();
            }
        }
    }
} else {
    header('Location: index.php?error=1');
    exit();    
}