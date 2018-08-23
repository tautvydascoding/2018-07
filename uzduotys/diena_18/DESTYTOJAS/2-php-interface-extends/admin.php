<?php

/**
 *
 */
 include ('./user.php');
 include ('./edit.php');

class Admin extends User implements Edit
{
    public function changeName($a) {
        $this->name = $a;
    }
    public function getName() {
        return $this->name;
    }
    public function isLogin() {
    }
    public function clearlastLoginTime() {
    }
}




//
