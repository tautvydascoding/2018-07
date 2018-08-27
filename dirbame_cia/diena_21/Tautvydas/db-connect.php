<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('NAME', 'projektas14');

$connection = mysqli_connect(HOST, USER, PASS, NAME);

if (!$connection) {
    die;
}