<?php
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