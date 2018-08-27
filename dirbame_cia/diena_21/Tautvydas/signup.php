<?php

if (isset($_POST['submit'])) {
    require_once('db-connect.php');
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    if (empty($username) || empty($password) || empty($email)) {
        header('Location: register.php?error=2');      
        exit();  
    } else {
        // if (!preg_match("/^[a-zA-Z]*$", $username) || !preg_match("/^[a-zA-Z]*$", $password)) {
        //     header('Location: register.php?error=3');
        //     exit();
        // } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: register.php?error=4');
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE username = ".$username." OR email = ".$email.";";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    header('Location: register.php?error=5');
                    exit();
                } else {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (username, password, email, cash, date_registered) VALUES ('".$username."', '".$passwordHash."', '".$email."', '50', NOW());";
                    mysqli_query($connection, $sql);
                    header('Location: index.php?info=regsuccessful');
                    exit();
                }
            }
        }
    // }
} else {
    header('Location: register.php?error=1');
    exit();    
}