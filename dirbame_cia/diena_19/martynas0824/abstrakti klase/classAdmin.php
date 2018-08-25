<?php

include("abstrakticlassUser.php");
include("interfaceEdit.php");

// 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
    // 4)
         // A) issivesti username,
         // B) pakeisti username
         // C) issivesti username


class Admin extends User implements Edit
{



  function changeName($a)
  {
    $this->name = $a;
  }
  function getName()
  {
    return $this->name;

  }
  function isLogin()
  {

  }
  function logout()
  {

  }
}

$obj = new Admin();

$vardas = $obj->getName();
echo $vardas;

$pass = $obj->getPass();
echo $pass;

$obj->changeName("lAURYKAS");

echo $obj->getName();
