<?php
include_once ('db_functions.php');

$daktaras = getDoctor($_GET['id']);

echo $daktaras['id'];
echo $daktaras['name'];
echo $daktaras['lname'];
