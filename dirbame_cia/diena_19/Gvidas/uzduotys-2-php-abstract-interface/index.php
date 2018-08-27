<?php
    // uzduotis:
    // 1) sukurti interface "Edit" :
    //  1.1) kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // changeName($a)
        // getName()
        // isLogin()
        // NOTE: Ar interface gali tureti kintamuosius????

interface Edit
{
    function changeName($a);
    function getName();
    function isLogin();
}

    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) sukurti kintamuosius:
            // name, password , createdDate, lastLogin
        // B) abstrakti funkcija "Loguot()"
        // C) NE abstrakti funkcija clearlastLoginTime()

abstract class User {
    public $name = "Petras";
    public $password = "slaptazodis";
    public $createDate = "data";
    public $LastLogin = "Paskutinis prisijungimas";
    abstract function logout();
    function clearlastLoginTime()
    {

    }
}

    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
        // 4)
        // A) issivesti username,
        // B) pakeisti username
        // C) issivesti username

class Admin extends User implements Edit
{
    function getName() {
        return $this->name;
    }
    function changeName($a) {
        echo "Naujas vardas: ".$this->name=$a."<br>";
    }
    function isLogin() {

    }
    function logout() {

    }
}
$admin = new Admin();
echo "Vardas: ".$admin->getName()."<br>";
$admin->changeName("Jonas");





     // NOTE: abstrakti klase - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
