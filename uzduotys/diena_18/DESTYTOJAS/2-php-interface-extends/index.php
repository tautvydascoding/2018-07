<?php


include_once ('./admin.php');

$administratorius = new Admin(); // kuriu objekta
echo $administratorius->name; // Tomas

$administratorius->changeName('Juozas');
echo $administratorius->getName();





//
