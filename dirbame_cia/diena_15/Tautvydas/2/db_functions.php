<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('NAME', 'cars');

$connection = mysqli_connect(HOST, USER, PASS, NAME);

if (!$connection) {
    echo "Error";
}