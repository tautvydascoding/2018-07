<?php


    // 2) sukurti (abstrakcia) klase "User"
// 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) sukurti kintamuosius:
            // name, password , createdDate, lastLogin
        // B) abstrakti funkcija "Loguot()"
        // C) NE abstrakti funkcija clearlastLoginTime()
abstract class User
{
    public $name = "vardas";
    private $password = " pasvordas";
    public $createDate = 0;
    private $lastLogin = 0;
    abstract function logout();
    function getPass()
    {
        return $this->password;
    }
    function clearLastLoginTime()
    {

    }
}



