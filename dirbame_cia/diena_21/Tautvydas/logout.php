<?php

session_start();

if (isset($_POST['submit'])) {
    session_unset();
    session_destroy();
    // echo "taip";
    header('Location: index.php');
    exit();
}