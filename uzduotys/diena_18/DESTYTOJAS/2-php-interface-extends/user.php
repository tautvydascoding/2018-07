<?php

abstract class User
{
     public $name = "Tomas";
     public $password = "xxx";
     public $createdDate = "2017-02";
     public  $lastLogin = "2018-02";

    function Logout() {
            // code
    }
    abstract function  clearlastLoginTime();
}









///
